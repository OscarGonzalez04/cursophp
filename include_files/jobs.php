
<?php
    require_once 'vendor/autoload.php';
    
    use App\Models\{Job, Project};

    //Extrayendo valores de base de datos de datos
    $jobs = Job::all();

    //Creando nuevo objeto de tipo Project.php
    $project1 = new Project('Project 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', true, 12);

    //Arreglo de projectos
    $projects = [
      $project1
    ];
  
    //Codigo para funciones 
    //Printable $job con esto especificamos que dato queremos. Type Hinting
    function printElemt($job){
  
        /*if(!$job->visible){
          return;
        }*/
  
        echo '<li class="work-position">
                <h5>'. $job->title .'</h5>
                <p>'. $job->description .'</p>
                <p>'. $job->getDuration() .'</p> 
                <strong>Achievements:</strong>
                <ul>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                  <li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>
                </ul>
              </li>'; 
    }