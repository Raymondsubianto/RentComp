@extends('layouts.main')

@section('section')
      <div class="text">Barang Dipinjam</div>
      <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Informasi Barang</h2>
                            <a href="create.php" class="btn btn-success pull-right">Tambah Baru</a>
                        </div>
                        <?php
                        // Include config file
                        //require_once "config.php";
    
                        // Attempt select query execution
                        $sql = "SELECT * FROM employees";
                        //if($result = mysqli_query($link, $sql)){
                        //   if(mysqli_num_rows($result) > 0){
                                echo "<table class='table table-bordered table-striped'>";
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>#</th>";
                                            echo "<th>Nama</th>";
                                            echo "<th>Barang</th>";
                                            echo "<th>Jumlah Peminjaman</th>";
                                            echo "<th>Pengaturan</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                        //            while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td>" . $id . "</td>";
                                            echo "<td>" . $name . "</td>";                            
                                            echo "<td>" . $barang . "</td>";
                                            echo "<td>" . $jumlah . "</td>";
                                            echo "<td>";
                                                echo "<a href='read.php?id=". $name ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                                echo "<a href='update.php?id=". $name ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                                echo "<a href='delete.php?id=". $name ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                            echo "</td>";
                                        echo "</tr>";
                        //            }
                                    echo "</tbody>";
                                echo "</table>";
                                // Free result set
                        //        mysqli_free_result($result);
                        //    } else{
                        //        echo "<p class='lead'><em>No records were found.</em></p>";
                        //    }
                        //} else{
                        //    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        //}
    
                        // Close connection
                        //mysqli_close($link);
                        ?>
                    </div>
                </div>
            </div>
        </div>
@endsection