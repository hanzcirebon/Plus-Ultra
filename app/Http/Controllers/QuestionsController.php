<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

use App\Models\JobPredContent;

class QuestionsController extends Controller
{
    /**
     * Return the the questions view page.
     *
     * @return view
     */
    public function index() {
        return view('short_questions');
    }

    /**
     * Utilize the Recommendation Model API to get a list of recommended based on user input.
     *
     * @param Request $request
     * @return view
     */
    public function predict(Request $request){
        // the pre-defined skills
        $pre_skills = [];
        // Retrieve each skill from the form input and add it to the array
        for ($i = 1; $i <= 9; $i++) {
            $skillInput = $request->input('question' . $i);
            if (!empty($skillInput)) { // Check if the input is not empty
                $pre_skills[] = $skillInput; // Add the skill to the array
            }
        }
        
        // Handling inputs from question 10 and 11
        $question10Input = $request->input('question10');
        $question11Input = $request->input('question11');

        // Convert each comma-separated string into an array, clean it, and add to skills array
        $additionalSkills10 = array_map([$this, 'cleanText'], explode(',', $question10Input));
        $additionalSkills11 = array_map([$this, 'cleanText'], explode(',', $question11Input));  

        // Merge additional skills into the main skills array
        $skills = array_merge($pre_skills, $additionalSkills10, $additionalSkills11);

        // Combine all skills into a single string separated by commas
        $skillsString = implode(',', $skills);

        // Call the API
        $url = 'https://it-explore-recommendation-a8422580e083.herokuapp.com/it-explore-recommendation/lmao?user_skill_input=' . $skillsString;
        $response = Http::get($url);

        // Handle the API response
        if ($response->successful()) {
            $apiResponse = $response->json();
            $job_title = $apiResponse[0]['job_title'];

            // Call the database with the matching job title
            $matchingJobs = JobPredContent::where('job', 'LIKE', '%' . $job_title . '%')
                                ->select('job_description', 'required_skills')
                                ->first();

            // dd($matchingJobs['required_skills']);
            $dataToStore = [
                'job_title' => $job_title,
                'job_description' => $matchingJobs['job_description'],
                'required_skills' => $matchingJobs['required_skills']
            ];
            Session::put('recommendation_result', $dataToStore);
            $message = 'success';
        }else{
            $message = 'failed';
        }
        //dd($dataToStore['job_title']);
        return redirect(route('quick-questions'))->with('message', $message);
    }

    /**
     * Clean the input text by trimming and removing extra internal spaces.
     *
     * @param string $text
     * @return string
     */
    private function cleanText($text)
    {
        // Trim whitespace at the start and end of the text
        $text = trim($text);

        // Replace multiple spaces with a single space
        $text = preg_replace('/\s+/', ' ', $text);

        return $text;
    }

    /**
     * Show recommendation page.
     *
     * @return view
     */
    public function showRecommendation(){
        $data = Session::get('recommendation_result');

        return view('recommendation_view', compact('data'));
    }
}
