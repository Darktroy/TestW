<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\testing_case;
use Illuminate\Http\Request;
use Exception;

class TestingCasesController extends Controller
{

    /**
     * Display a listing of the testing cases.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        dd('testuinf');
        $testingCases = testing_case::paginate(25);

        return view('testing_cases.index', compact('testingCases'));
    }

    /**
     * Show the form for creating a new testing case.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('testing_cases.create');
    }

    /**
     * Store a new testing case in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            testing_case::create($data);

            return redirect()->route('testing_cases.testing_case.index')
                ->with('success_message', 'Testing Case was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified testing case.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $testingCase = testing_case::findOrFail($id);

        return view('testing_cases.show', compact('testingCase'));
    }

    /**
     * Show the form for editing the specified testing case.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $testingCase = testing_case::findOrFail($id);
        

        return view('testing_cases.edit', compact('testingCase'));
    }

    /**
     * Update the specified testing case in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $testingCase = testing_case::findOrFail($id);
            $testingCase->update($data);

            return redirect()->route('testing_cases.testing_case.index')
                ->with('success_message', 'Testing Case was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified testing case from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $testingCase = testing_case::findOrFail($id);
            $testingCase->delete();

            return redirect()->route('testing_cases.testing_case.index')
                ->with('success_message', 'Testing Case was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'length' => 'required|string|min:1',
            'width' => 'required|string|min:1',
            'average_of_values' => 'numeric|nullable|min:-9|max:9',
            'area' => 'string|min:1|nullable',
            'area_square' => 'string|min:1|nullable', 
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
