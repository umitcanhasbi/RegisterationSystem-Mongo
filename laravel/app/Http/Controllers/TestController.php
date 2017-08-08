<?php

namespace App\Http\Controllers; 


use \App\Department;
use \App\Lesson;
use Response;
use DB;
use Request;


class TestController extends Controller
{

    public function getDepartments()
    {
      $departments = Department::getLatest();
      return view('departments', compact('departments')); //compacting the blades
    }

    public function addDepartment(Request $request)//add new department
    {
      $department = new Department;
      $department->name = request()->name;
      $department->info = request()->info;
      $department->save();
      return redirect('/departments');
    }

    public function foo()
    {
      getByName('Cs');  
    }

    public function editDepartment($id) 
    {
      $department = Department::getById($id); //edit a department
      $department->name = request()->name;
      $department->info = request()->info;
      $department->save();
      return redirect('/departments');
    }

    public function deleteDepartment($id) //delete department
    {
      $department = Department::getById($id);
      $department->delete();
      return redirect('/departments');
    }

    public function getLessons()
    {

      $lessons = Lesson::getLatest();
      return view('lessons', compact('lessons')); //compacting lesson
    }

    public function addLesson(Request $request) //add lesson
    {
      $lesson = new Lesson;
      $lesson->name = request()->name;
      $lesson->info = request()->info;
      $lesson->date = request()->date;
      $lesson->department_id = request()->department_id;
      $lesson->save();
      return redirect('/lessons');
    }

    public function editLesson($id) //edit lesson attributes
    {
      $lesson = Lesson::getById($id);
      $lesson->name = request()->name;
      $lesson->info = request()->info;
      $lesson->date = request()->date;
      $lesson->department_id = request()->department_id;
      $lesson->save();
      return redirect('/lessons');
    }

    public function deleteLesson($id) //delete lesson
    {
      $lesson = Lesson::getById($id);
      $lesson->delete();
      return redirect('/lessons');
    }
 
}

