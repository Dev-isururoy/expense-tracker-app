<?php

namespace App\Controllers;

use App\Models\Expense;

class ExpenseController
{
    public function index()
    {
        // Retrieve all expenses from the database
        $expenses = Expense::all();

        // Render the view with the expenses data
        return view('expense.index', ['expenses' => $expenses]);
    }

    public function create()
    {
        // Render the view for creating a new expense
        return view('expense.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            // Add more validation rules 
        ]);

        // Create a new expense record
        $expense = new Expense();
        $expense->description = $request->input('description');
        $expense->amount = $request->input('amount');
        // Add more fields as needed
        $expense->save();

        // Redirect to the expenses index page
        return redirect()->route('expenses.index');
    }

    public function edit($id)
    {
        // Find the expense by ID
        $expense = Expense::find($id);

        // Render the view for editing the expense
        return view('expense.edit', ['expense' => $expense]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            // Add more validation rules 
        ]);

        // Find the expense by ID
        $expense = Expense::find($id);

        // Update the expense record
        $expense->description = $request->input('description');
        $expense->amount = $request->input('amount');
        // Update more fields 
        $expense->save();

        // Redirect to the expenses index page
        return redirect()->route('expenses.index');
    }

    public function show($id)
    {
        // Find the expense by ID
        $expense = Expense::find($id);

        // Render the view for showing the expense details
        return view('expense.show', ['expense' => $expense]);
    }

    public function destroy($id)
    {
        // Find the expense by ID and delete it
        $expense = Expense::find($id);
        $expense->delete();

        // Redirect to the expenses index page
        return redirect()->route('expenses.index');
    }
}
