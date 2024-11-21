<?php
    include 'bd/conecta.php';
    include 'menu.php';
?>

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Produtos</h1>
        </div>
        <!-- Single Page Header End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            
                        </div>
                        <div class="row g-4 justify-content-around">
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-around">
                                    
                                <?php
                                $sql = "SELECT * FROM estoque_flores";
                                $consulta = $conexao->query($sql); 
                                while($dados = $consulta->fetch_assoc()){

                                    echo "<div class='col-12 col-sm-6 col-lg-3'> <!-- Ajuste nas classes Bootstrap --> 
                                            <div class='rounded position-relative fruite-item' style='width: 100%;'>
                                                <div class='fruite-img'>";                                        
                                    echo "<img src='".$dados['imagem_flor']."' class='img-fluid w-100 rounded-top' alt=''>";
                                    echo "</div>";
                                    // echo "<div class='text-white bg-secondary px-3 py-1 rounded position-absolute' style='top: 10px; left: 10px;'>Buquê</div>";
                                    echo "<div class='p-4 border border-secondary border-top-0 rounded-bottom'>
                                            <h4>".$dados['nome_flor']."</h4>";
                                    echo "<div class='d-flex justify-content-between flex-lg-wrap'>
                                            <p class='text-dark fs-5 fw-bold mb-0'> R$".$dados['preco_flor']."</p>";
                                    echo "</div>
                                                </div>
                                            </div>
                                        </div>";
                                    echo "<style>
                                    .fruite-img img {
                                        width: 100%;
                                        height: 300px;
                                        object-fit: cover;
                                        border-radius: 8px 8px 0 0;
                                    }
                                    </style>";

                                }  
                                ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fruits Shop End-->


        <?php
            include 'footer.php';
        ?>
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>