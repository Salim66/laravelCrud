<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;

class StudentController extends Controller
{
    /**
     * Show Student Form
     */
    public function showForm()
    {
        return view('student.index');
    }

    /**
     * Insert student Form
     */
    public function insertStudent(Request $request)
    {
        /**
         * Validation
         */
        $this -> validate($request, [
            'name' => 'required',
            'email' => 'required | unique:students',
            'cell' => 'required | unique:students',
            'uname' => 'required | unique:students',
        ]);

        /**
         * Image Upload System
         */
        if ( $request -> hasFile('photo') ) {
            $image = $request -> file('photo');
            $unique_photo_name = md5(time().rand()) .'.'. $image -> getClientOriginalExtension();
            $image -> move(public_path('media/students/'), $unique_photo_name);
        }else {
            $unique_photo_name = 'avatar.jpg  ';
            }

        /**
         * Create New Student
         */
        Student::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'cell' => $request -> cell,
            'uname' => $request -> uname,
            'photo' => $unique_photo_name,
        ]);

        //Redirected
        return redirect('student-all') -> with('success', 'Student added successful');

    }

    /**
     * All Student Show
     */
    public function allStudent()
    {
        $student_data = Student::latest() -> get();
        return view('student.all', [
            'students' => $student_data,
        ]);
    }

    /**
     * Single Student View
     */
    public function singleStudent($id)
    {
        $student = Student::find($id);
        return view('student.show', [
            'single_student' => $student,
        ]);
    }

    /**
     * Delete Single Student Data
     */
    public function deleteStudent($id)
    {
        $student_delete = Student::find($id);
        $student_delete -> delete();
        unlink('media/students/' . $student_delete -> photo);
        return redirect() -> back() -> with('success', 'Delete student data successful');
    }

    /**
     * Edit Single Student Data
     */
    public function editStudent($id)
    {
        $edit_student = Student::find($id);
        return view('student.edit', [
            'edit_student' => $edit_student,
        ]);
    }

    /**
     * Update Singel Student Data
     */
    public function updateStudent(Request $request, $id)
    {
       $student_data = Student::find($id);

       // Photo validation
        if( $request -> hasFile('new_photo') ) {
            $image = $request -> file('new_photo');
            $unique_photo_name = md5(time().rand()) .'.'. $image -> getClientOriginalExtension();
            $image -> move(public_path('media/students/'), $unique_photo_name);
            unlink('media/students/'. $request -> old_photo);
        }else {
            $unique_photo_name = $request -> old_photo;
        }

       $student_data -> name = $request -> name;
       $student_data -> email = $request -> email;
       $student_data -> cell = $request -> cell;
       $student_data -> uname = $request -> uname;
       $student_data -> photo = $unique_photo_name;
       $student_data -> update();

        return redirect() -> back() -> with('success', 'Student updated data successful');
    }
}
