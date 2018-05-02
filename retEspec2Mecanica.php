<?php
    session_start();
    include('ConexionBD.php');
    $BD=new ConexionBD('localhost','metalmecanica','metal_mecanica','itmoreliamecanica');
?>
<div id="wrapper">
    <table class="centered hide-on-med-and-down">
        <thead>
            <tr>
                <th>Semestre 1</th>
                <th>Semestre 2</th>
                <th>Semestre 3</th>
                <th>Semestre 4</th>
                <th>Semestre 5</th>
                <th>Semestre 6</th>
                <th>Semestre 7</th>
                <th>Semestre 8</th>
                <th>Semestre 9</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(1,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(2,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(3,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(4,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(5,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(6,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(7,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(8,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
                <td>
                   <div>
                        <div class="row">
                            <table class="centered hide-on-med-and-down">
                                <tbody>
                                    <?php
                                        $resultSem1=$BD->mostrarmateria(9,'Mecanica','Especialidad 2');
                                        while ($renglon=mysqli_fetch_array($resultSem1)){
                                    ?>
                                    <tr>
                                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                                    </tr>
                                    <?php  
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </td>
            </tr>
        </tbody>
    </table>
    <div class="row hide-on-large-only">
        <table class="centered">
            <thead>
                <tr>
                    <th> </th>
                    <th>Semestre 1</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(1,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 2</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(2,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 3</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(3,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 4</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(4,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 5</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(5,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 6</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(6,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 7</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(7,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 8</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(8,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        <table class="centered">
            <thead>
                <tr>
                    <th></th>
                    <th>Semestre 9</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        $resultSem1=$BD->mostrarmateria(9,'Mecanica','Especialidad 2');
                        $cont=0;
                        while ($renglon=mysqli_fetch_array($resultSem1)){
                            if($cont==3){
                                ?>
                                </tr><tr>
                                <?php
                            }
                    ?>
                        <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large  orange darken-2 flow-text"  href=<?php echo 'admin/'.$renglon['url'].'' ?>><h6><?php echo $renglon['abreviacion']; ?></h6></a></div><br />Creditos:<?php echo $renglon['creditos']; ?><br />Tipo: <?php echo $renglon['tipo']?><br /></div></td>
                    <?php 
                            $cont=$cont+1; 
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>