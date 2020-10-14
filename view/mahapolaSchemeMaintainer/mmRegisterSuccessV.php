<main>
    <title>Register Success</title>
    <?php
        require('../basic/header.php');    
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmRegisterToMedicalSchemeV.php">Register to Medical Schmeme</a></li>
            <li>Registered Successfully</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <p>
            Your membership form has been sent for the approval. You will be inform about the membership later.
        </p> 
        <br>
        <p>Thank you..</p>

        <a href="mmHomeV.php"><button type="submit" name="registerSuccess-submit">OK</button></a><br>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>