<!--Hier wird der Head und die Datensammlung eingebettet als include -->
<?php include 'includeHead.php';?> 
<?php include 'data-collector.php';?> 


</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-8 m-3">
            <h1 style="text-align:left">Umfrage zu deiner Gesundheit</h1>
        </div>
        <div class="col m-2 p-4" id="orientation">
            <strong><p>Frage 2/10</p></strong>
        </div>
</div>

<!-- Frage -->
<div class = "container">
    <div class = "row m-5">
        <div class = "col-8">
            <h2>2. Frage</h2>
                <p>Nimmst du Nahrungsergänzungsmittel?</p> <br> 
        </div>
        <div class = "col-4">
        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="5em" width="5em" xmlns="http://www.w3.org/2000/svg"><path d="M217.4 27.43c-27.9.47-53.1 17.11-64.5 42.84l136.5 41.23c6-35.79-15.5-70.49-50.1-81.02-6.2-1.88-12.7-2.91-19.2-3.05h-2.7zm-69.7 60.08c-6.1 35.89 15.4 70.69 50.1 81.19 34.8 10.5 71.9-6.7 86.5-40zm265.5 44.29c-25.3.1-52.2 12.3-72.5 41L215.9 349.7c-33.5 47.4-18.9 97 14.1 120.4 33.1 23.5 84.6 20.8 118.1-26.6l124.7-176.8c33.5-47.5 18.9-97-14.1-120.5-12.4-8.8-27.3-13.9-43-14.4zm-1.8 17.3c1.3 0 2.6 0 3.8.1 12.1.5 23.5 4.8 33.1 11.7 25.7 18.2 38.6 54.5 9.7 95.4l-64.5 91.5c-35.8-9.6-81.8-42.3-102.7-73l64.7-91.6c16.9-23.9 37-33.7 55.9-34.1zM91.25 225.3c-9.62.1-19.11 2.1-27.93 6-33.11 14.5-50.34 51.5-40.24 86.3l130.72-57.1c-13.1-22.1-36.9-35.5-62.55-35.2zm69.65 51.6L30.2 334.1c18.45 31.4 57.3 44 90.6 29.5 33.2-14.6 50.4-51.8 40.1-86.7z"></path></svg>
    </div>
</div> 

<!-- Hier kommt ein Formular-->
<!-- Hier kommt der Radio Buttom hier kommt noch was rein bei onsubmit...-->
            <div class = "col-12 m-5">
                <div class="radiobutton">
                    <form name="myForm" action="page3.php" onsubmit="return validateRadio('radioName');" method="post"> <!-- muss noch erstellt werden -->
                        <input type="hidden" name="pageID" value="page2"> <!--Hidden Field-->
                        <div>    
                            <input type="radio" name="radioName" id="radioName" value="radioJa">
                                <label for="radioName">Ja</label>
                        </div>
                        <br>
                        <div>
                            <input type="radio" name="radioName" id="radioName" value="radioNein">
                                    <label for="radioName">Nein</label>
                        </div>
                        <div class = "submit">
                        <br>
                        <p id="validation-warning" style=color:red></p> <!--Das klappt noch nicht wirklich-->

                        <input type= "submit" class ="submitButtom" value="Eingabe">
                        </div>      
                    </form> 
                </div>
            </div>

            <hr>

    


    <?php include 'includeFooter.php';?>

