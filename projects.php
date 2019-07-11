<html>
<body>
    <?php
        include('config/init.php');
        echoHeader('Projects', 'My projects');
    ?>
    
    <div class='pageWrapper1'>
        <div class="projectParent"> 
            <div class="child_1">
                <h2>LACRM</h2>
                <p>Less Annoying CRM Summer '19 Coding<br> Fellowship Program in St. Louis, MO</p>
                <a href="fellowship.php"> 
                    <div class="companyLogo" alt="HTML tutorial"></div>
                </a>
            </div>
            <div class="child_2">
                <h2>BioSURF</h2>
                <p>Washington University Biology Summer '18 <br> Undergraduate Research Fellowship Program</p>
                <a href="tracing.php">
                    <div class="companyLogo" alt="HTML tutorial"></div>
                </a>
            </div>
        </div>
    </div>
    
    <div class= 'pageWrapper2'>
    <?php

        if(isset($_REQUEST['newProfile'])){
            insertProfile(
                $_REQUEST['name'],
                $_REQUEST['occupation'],
                $_REQUEST['school'],
                $_REQUEST['username'],
                $_REQUEST['password']
            
            );
        }
        /*$profiles = getAllProfiles();
        echo "
            <h3>Check out all these people</h3>
            ";       
 
        foreach($profiles as $profile){ 
            echo "<a href='/viewPost.php?profileId=".$profile['profileId']."'>
                ".$profile['name']."
            </a><br />";
        }*/
    ?>

    <form action='' method='post'>
        
        <!--how do you reference the info later key=name and value is what user types in -->
        <p class= 'Login'> Name: <input type='text' name='name' /><br/>
        Occupation: <input type='text' name='occupation' /><br />
        <select name='school'>
                <option value='default'>- School -</option>
                <option value='WashU'>WashU</option>
                <option value='SLU'>SLU</option>
                <option value='Webster'>Webster</option>
                <option value='Mizzou'>Mizzou</option>
        </select> <br/>
        User:<input type='text' name='username' /><br />
        Password:<input type='text' name='password' /><br />
        
        <br/><br/>
        <!-- submit button-->
        <input type='submit' name='newProfile' value='Make a new profile' />
</form>
    </div>

</body>

</html>