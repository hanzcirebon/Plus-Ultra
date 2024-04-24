<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionsController extends Controller
{
    public function index() {
        return view('short_questions');
    }

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
        $url = 'https://it-explore-39fbb6c0ac8f.herokuapp.com/it-explore-recommendation/lmao?user_skill_input=' . $skillsString;
        $response = Http::get($url);
        
        dd($response->body());

        // Handle the API response
        if ($response->successful()) {
            $apiResponse = $response->body(); // or $response->json() if JSON response
            // Process the response as needed
        } else {
            // Handle error
            $apiResponse = 'API call failed';
        }

        return 0;
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
}
