
<?php 

    include('view/layout/header.php');

    // Setting schedule in localhost
    $json_users = json_encode($user_schedule);

    echo "
        <script>
            window.localStorage.setItem('schedule', '{$json_users}');
        </script>
    ";
    

?>


<h1 class="text-center p-3">Mi Horario</h1>

    <!-- Schedule -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr class="text-center">
                        <th class="th-time">Time</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sábado</th>
                        <th>Domingo</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
                        $days_cut = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
                        
                        for($i = 6; $i < 21; $i++){
                            echo "<tr>";
                                echo "<th>" . $i . " - " . $i+1 . "</th>";

                                for($f = 0; $f < 7; $f++){
                                    echo "<td class='". $user_schedule->{$days[$f]}->{$days_cut[$f]."-".$i}->{'cell-color'} ."' id='". $days_cut[$f] ."-". $i ."' onclick=showLabel('". $days_cut[$f] ."-". $i ."') type='button' data-bs-toggle='modal' data-bs-target='#modal'>";
                                        echo "<div class='d-flex flex-row justify-content-between'>";
                                            echo $user_schedule->{$days[$f]}->{$days_cut[$f]."-".$i}->title;

                                            if($user_schedule->{$days[$f]}->{$days_cut[$f]."-".$i}->markup != 0){
                                                echo "<div class='align-self-center'>";
                                                    echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check-circle-fill' viewBox='0 0 16 16'><path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/></svg>";
                                                echo "</div>";
                                            }

                                        echo "</div>";
                                    echo "</td>";
                                }

                                echo "</th>";
                            echo "</tr>";
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>


    
    <!-- Modal -->
    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Lunes 6-7</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="modalClose2"></button>
                </div>
                <div class="modal-body" id="modalBody">
                    <form action="" method="POST" id="form">
                        <label for="task-label" class="form-label" value="">Título</label>
                        <input type="text" class="form-control" name="task-label" id="task-label">

                        <div class="form-check mt-2">
                            <label for="markup" class="form-label">Marcador</label>
                            <input type="checkbox" class="form-check-input" name="markup" id="markup">
                        </div>

                        <label for="t-cell-color" class="form-label">Color de Celda</label>
                        <select name="t-cell-color" name="t-cell-color" class="form-select" id="t-cell-color">
                            <option value="default-c">Por Defecto (Gris)</option>
                            <option value="red-c">Rojo</option>
                            <option value="blue-c">Azul</option>
                            <option value="green-c">Verde</option>
                            <option value="yellow-c">Amarillo</option>
                        </select>
                        <label for="task-desc" class="form-label mt-2">Descripción</label>
                        <textarea class="form-control" name="task-desc" cols="30" rows="10" placeholder="describe tu tarea aquí..." maxlength="140" id="task-desc"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modalClose1">Cerrar</button>
                <button type="button" class="btn btn-primary" id="modalSave">Guardar</button>
            </div>
        </div>
        </div>
    </div>


    <?php include 'view/layout/footer.php' ?>