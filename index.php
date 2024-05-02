<?php
    include __DIR__ ."/models/hotel.php";
    if(!empty($_GET['search']) || isset($_GET['search']) && $_GET['search'] == 0){
        $search = $_GET['search'];
        $newhotel = array_filter($hotels, function($hotel) use ($search){
            return $hotel ['parking'] == $search || $search == "all";
        });
    }else{
        $newhotel = $hotels;
    }
    include  __DIR__ . "/views/header.php";
?>
<main class="container">
    <?php
        include __DIR__ . "/views/table.php";
    ?>    
</main>
<?php
     include __DIR__ . "/views/footer.php";
?>
</body>
</html>