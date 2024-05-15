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
        $pre_skills = $request->answers;

        // Combine all skills into a single string separated by commas
        $skillsString = implode(',', $pre_skills);

        // Call the API
        $url = 'https://it-explore-recommendation-a8422580e083.herokuapp.com/it-explore-recommendation/lmao?user_skill_input=' . $skillsString;
        $response = Http::get($url);

        // Handle the API response
        if ($response->successful()) {

            // If the seesion is alreaady created it will remove the session
            if (Session::has('recommendation_result')){
                // Remove the session variable
                Session::forget('recommendation_result');
            }

            $apiResponse = $response->json();
            $job_title = $apiResponse[0]['job_title'];
            $percentage = $apiResponse[0]['similarity'];

            $dataToStore = [
                'job_title' => $job_title,
                'similarity' => $percentage,
                'others' => $apiResponse
            ];
            Session::put('recommendation_result', $dataToStore);

            $message = 'success';
            $status = 200;
        }else{
            $message = 'failed';
            $status = 500;
        }
        //dd($dataToStore['job_title']);
        return response()->json(['message'=> $message],$status);
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
