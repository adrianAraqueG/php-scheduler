
<?php include('layout/header.php') ?>

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
                    <tr>
                        <th>6 - 7</th>
                        <td class="default-c" id="mon-6" onclick="edit('mon-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            <b>Trabajo de Grado y un titulo largo</b>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </td>
                        <td class="default-c" id="tue-6" onclick="edit('tue-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-6" onclick="edit('wed-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-6" onclick="edit('thu-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-6" onclick="edit('fri-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-6" onclick="edit('sat-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-6" onclick="edit('sun-6')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>7 - 8</th>
                        <td class="default-c" id="mon-7" onclick="edit('mon-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-7" onclick="edit('tue-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-7" onclick="edit('wed-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-7" onclick="edit('thu-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-7" onclick="edit('fri-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-7" onclick="edit('sat-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-7" onclick="edit('sun-7')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>8 - 9</th>
                        <td class="default-c" id="mon-8" onclick="edit('mon-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-8" onclick="edit('tue-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-8" onclick="edit('wed-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-8" onclick="edit('thu-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-8" onclick="edit('fri-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-8" onclick="edit('sat-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-8" onclick="edit('sun-8')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>9 - 10</th>
                        <td class="default-c" id="mon-9" onclick="edit('mon-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-9" onclick="edit('tue-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-9" onclick="edit('wed-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-9" onclick="edit('thu-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-9" onclick="edit('fri-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-9" onclick="edit('sat-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-9" onclick="edit('sun-9')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>10 - 11</th>
                        <td class="default-c" id="mon-10" onclick="edit('mon-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-10" onclick="edit('tue-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-10" onclick="edit('wed-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-10" onclick="edit('thu-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-10" onclick="edit('fri-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-10" onclick="edit('sat-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-10" onclick="edit('sun-10')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>11 - 12</th>
                        <td class="default-c" id="mon-11" onclick="edit('mon-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-11" onclick="edit('tue-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-11" onclick="edit('wed-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-11" onclick="edit('thu-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-11" onclick="edit('fri-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-11" onclick="edit('sat-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-11" onclick="edit('sun-11')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>12 - 13</th>
                        <td class="default-c" id="mon-12" onclick="edit('mon-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-12" onclick="edit('tue-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-12" onclick="edit('wed-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-12" onclick="edit('thu-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-12" onclick="edit('fri-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-12" onclick="edit('sat-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-12" onclick="edit('sun-12')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>13 - 14</th>
                        <td class="default-c" id="mon-13" onclick="edit('mon-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-13" onclick="edit('tue-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-13" onclick="edit('wed-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-13" onclick="edit('thu-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-13" onclick="edit('fri-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-13" onclick="edit('sat-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-13" onclick="edit('sun-13')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>14 - 15</th>
                        <td class="default-c" id="mon-14" onclick="edit('mon-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-14" onclick="edit('tue-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-14" onclick="edit('wed-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-14" onclick="edit('thu-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-14" onclick="edit('fri-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-14" onclick="edit('sat-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-14" onclick="edit('sun-14')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>15 - 16</th>
                        <td class="default-c" id="mon-15" onclick="edit('mon-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-15" onclick="edit('tue-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-15" onclick="edit('wed-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-15" onclick="edit('thu-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-15" onclick="edit('fri-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-15" onclick="edit('sat-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-15" onclick="edit('sun-15')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>16 - 17</th>
                        <td class="default-c" id="mon-16" onclick="edit('mon-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-16" onclick="edit('tue-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-16" onclick="edit('wed-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-16" onclick="edit('thu-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-16" onclick="edit('fri-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-16" onclick="edit('sat-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-16" onclick="edit('sun-16')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>17 - 18</th>
                        <td class="default-c" id="mon-17" onclick="edit('mon-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-17" onclick="edit('tue-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-17" onclick="edit('wed-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-17" onclick="edit('thu-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-17" onclick="edit('fri-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-17" onclick="edit('sat-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-17" onclick="edit('sun-17')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>18 - 19</th>
                        <td class="default-c" id="mon-18" onclick="edit('mon-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-18" onclick="edit('tue-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-18" onclick="edit('wed-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-18" onclick="edit('thu-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-18" onclick="edit('fri-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-18" onclick="edit('sat-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-18" onclick="edit('sun-18')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>19 - 20</th>
                        <td class="default-c" id="mon-19" onclick="edit('mon-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-19" onclick="edit('tue-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-19" onclick="edit('wed-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-19" onclick="edit('thu-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-19" onclick="edit('fri-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-19" onclick="edit('sat-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-19" onclick="edit('sun-19')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>20 - 21</th>
                        <td class="default-c" id="mon-20" onclick="edit('mon-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-20" onclick="edit('tue-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-20" onclick="edit('wed-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-20" onclick="edit('thu-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-20" onclick="edit('fri-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-20" onclick="edit('sat-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-20" onclick="edit('sun-20')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
                    <tr>
                        <th>21 - 22</th>
                        <td class="default-c" id="mon-21" onclick="edit('mon-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            M
                        </td>
                        <td class="default-c" id="tue-21" onclick="edit('tue-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="wed-21" onclick="edit('wed-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            W
                        </td>
                        <td class="default-c" id="thu-21" onclick="edit('thu-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            T
                        </td>
                        <td class="default-c" id="fri-21" onclick="edit('fri-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            F
                        </td>
                        <td class="default-c" id="sat-21" onclick="edit('sat-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                        <td class="default-c" id="sun-21" onclick="edit('sun-21')" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                            S
                        </td>
                    </tr>        
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
                    <form action="info.php" method="POST" id="form">
                        <label for="task-label" class="form-label">Título</label>
                        <input type="text" class="form-control" name="task-label" maxlength="20">

                        <div class="form-check mt-2">
                            <label for="markup" class="form-label">Marcador</label>
                            <input type="checkbox" class="form-check-input" name="markup">
                        </div>

                        <label for="t-cell-color" class="form-label">Color de Celda</label>
                        <select name="t-cell-color" id="t-cell-color" class="form-select">
                            <option value="default-c" default>Por Defecto (Gris)</option>
                            <option value="red-c">Rojo</option>
                            <option value="blue-c">Azul</option>
                            <option value="green-c">Verde</option>
                            <option value="yellow-c">Amarillo</option>
                        </select>
                        <label for="task-desc" class="form-label mt-2">Descripción</label>
                        <textarea class="form-control" name="task-desc" cols="30" rows="10" placeholder="describe tu tarea aquí..." maxlength="140"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="modalClose1">Cerrar</button>
                <button type="button" class="btn btn-primary" id="modalSave">Guardar</button>
            </div>
        </div>
        </div>
    </div>


    <?php include 'layout/footer.php' ?>