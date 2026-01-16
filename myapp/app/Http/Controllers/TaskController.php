<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
     private $taskModel;

     public function __construct(Task $taskModel){
        $this->taskModel = $taskModel;
     }


     //Валидация Форм рекуеста
     public function create(TaskRequest $r){

         $this->taskModel->title = $r->title;
         $this->taskModel->description = $r->description;
         $this->taskModel->status = $r->status;

         $this->taskModel->save();

         return response()->api(["status"=>"ok"], 200);

         //response()->api(["status"=>"ok"], 200);
     }

    //Отдать Задачи
    public function getAll(){
       $task = Task::all();

        return response()->api($task);
    }

    //Удаления Задачи
    public function delete(int $id){
       $task = Task::findOrFail($id);
       $task->delete();

       return response()->api(["status"=>"ok"]);
    }

    //Отдать Одну Задачу
    public function getOne($id){
      $task = Task::findOrFail($id);

      return response()->api($task);
    }
    //Изменения Задачи
    public function change(TaskRequest $r, int $id){
        error_log(print_r($r->all(), true));
        $task = Task::findOrFail($id);
        $task->update($r->validated());

        return response()->api($task);
    }
}
