<!DOCTYPE html>
<html>
    <head>
        <title>Oferta</title>
        <link rel="stylesheet" href="provoo.css">
    </head>
    <style>
        .tablink {
        background-color: #555;
        color: black;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 25%;
        }

        .tablink:hover {
        background-color: #777;
        }
        .tabcontent {
            flex-wrap: wrap;
        display: flex;
        margin-bottom: 2px;
        margin-top: 2px;
        color: #f4f4f4;
        height: 100%;
        }
        .tabcontent img{
            display: flex;
            flex-direction: row;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .hotel-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
        }

        .hotel-box {
            flex-wrap: wrap;
            width: 300px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .hotel-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .hotel-info {
            padding: 15px;
        }

        h2 {
            margin-top: 0;
            font-size: 1.5em;
        }

        p {
            margin: 0;
            color: #555;
        }
       

        #news{
            color: black;
        }
        .lajmet {
            flex-wrap: wrap;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .lajmi {
            flex: 0 0 calc(45% - 20px);
            margin: 10px;
        }

        .lajmi img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .lajmi h3 {
            margin: 10px 0;
        }

        .lajmi p {
            color: #555;
        }

        .lajmi a {
            display: block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .lajmi a:hover {
            text-decoration: underline;
        }
        .titulli{
            color: #555;
        
            font-size: 2.2em;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;
        }
        #fluturimet {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .fluturim {
            flex-wrap: wrap;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 4%;
            margin: 1%;
            max-width: 800px;
        }

        .fluturim h2 {
            color: #333;
        }

        .fluturim p {
            margin: 0.5em 0;
            color: #666;
        }
        .shkrimi{
            border-radius: 1px;
            font-size: 20%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        #about {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #about h3 {
            color: black;
        }

        #about p {
            color:black;
            font-size: medium;
        }
        fieldset{
            margin-left: 2%;
            margin-right: 2%;
        }
        fieldset img{
            width: 100%;
            height: 100%;
        }
        fieldset p{
            font-size: 1.2em;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        #R{
          text-align: center;
          color: black;
        }
        form {
        max-width: 400px;
        margin: 0 auto;
        }

        label {
            color: black;
            display: block;
            margin-bottom: 5px;
        }
        input,select {
        width: 50%;
        padding: 4px;
        margin-bottom: 5px;
        box-sizing: border-box;
        }
        button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

    </style>
    <body >
        <button class="tablink" onclick="openPage('Hotels')" id="defaultOpen">Hotels</button>
        <button class="tablink" onclick="openPage('News')" id="defaultOpen">News</button>
        <button class="tablink" onclick="openPage('fluturimet')"id="defaultOpen">Flight</button>
        <button class="tablink" onclick="openPage('About')"id="defaultOpen">About</button>

        <div id="Hotels" class="tabcontent">
            <br>
            <div class="hotel-container">
                <div class="hotel-box">
                    <img class="hotel-img" src="hotel1.png" alt="Hotel 1">
                    <div class="hotel-info">
                        <h2>Hotel ne Frakfurt</h2>
                        <p>Vikendë në Gjermani (1/nate e 2/ditë) në hotelin më të mirë në çendër të qytetit të Frankfurtit.<b>Per vetem 300€</b></p>
                    </div>
                </div>
            
                <div class="hotel-box">
                    <img class="hotel-img" src="hotel2.png" alt="Hotel 2">
                    <div class="hotel-info">
                        <h2>Hotel ne Rome</h2>
                        <p>Vikendë në Rome (1/nate e 2/ditë) në hotelin më të mirë në çendër të qytetit të Romes.<b>Per vetem 190€</b> </p>
                    </div>
                </div>

                <div class="hotel-box">
                    <img class="hotel-img" src="hotel4.png" alt="Hotel 3">
                    <div class="hotel-info">
                        <h2>Hotel ne Spain</h2>
                        <p>OTEL BONITA Classic - DURRËS📣
                            /  35€ 𝐧𝐚𝐭𝐚 𝐩𝐞̈𝐫 𝐩𝐞𝐫𝐬𝐨𝐧 , 𝐦𝐞̈𝐧𝐠𝐣𝐞𝐬,  𝐩𝐢𝐬𝐡𝐢𝐧 𝐝𝐡𝐞 𝐩𝐥𝐚𝐳𝐡! </p>
                    </div>
                </div>

                <div class="hotel-box">
                    <img class="hotel-img" src="hotel6.png" alt="Hotel 4">
                    <div class="hotel-info">
                        <h2>Hotel ne Shqiperi</h2>
                        <p>HOTEL BONITA Classic - DURRËS📣
                            /  35€ 𝐧𝐚𝐭𝐚 𝐩𝐞̈𝐫 𝐩𝐞𝐫𝐬𝐨𝐧 , 𝐦𝐞̈𝐧𝐠𝐣𝐞𝐬,  𝐩𝐢𝐬𝐡𝐢𝐧 𝐝𝐡𝐞 𝐩𝐥𝐚𝐳𝐡!</p>
                    </div>
                </div>
               
                <div class="hotel-box">
                    <img class="hotel-img" src="hotel8.png" alt="Hotel 4">
                    <div class="hotel-info">
                        <h2>Hotel Viena</h2>
                        <p>Vikendë në Austri (1/nate e 2/ditë) në hotelin më të mirë në çendër të qytetit të Vienes.<b>Per vetem 210€</b> </p>
                    </div>
                </div>
                
                <div class="hotel-box">
                    <img class="hotel-img" src="hotel10.png" alt="Hotel 4">
                    <div class="hotel-info">
                        <h2>Hotel Dubai</h2>
                        <p>HOTEL DUBAI Classic - DUBAI📣
                            /  60€ 𝐧𝐚𝐭𝐚 𝐩𝐞̈𝐫 𝐩𝐞𝐫𝐬𝐨𝐧 , 𝐦𝐞̈𝐧𝐠𝐣𝐞𝐬,  𝐩𝐢𝐬𝐡𝐢𝐧 𝐝𝐡𝐞 𝐩𝐥𝐚𝐳𝐡!.</p>
                    </div>
                </div>
           
            </div>
            <hr>
            <div class="rezervimet">
            <h3 id="R">Rezervoni Hotelin</h3>
            <form action="" method="post">
                <label for="emri">Emri:</label>
                <input type="text" id="emri" name="emri" required><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                
                <label for="telefoni">Telefoni:</label>
                <input type="tel" id="telefoni" name="telefoni" required><br>
                
                <label for="datafillimit">Data e Fillimit:</label>
                <input type="date" id="datafillimit" name="datafillimit" required><br>
                
                <label for="datambarimit">Data e Mbarimit:</label>
                <input type="date" id="datambarimit" name="datambarimit" required><br>
                
                <select id="Hotelet" name="zgejdhHotelin" required><br>
                    <option value="ZGJEDH HOTELIN">ZGJEDH HOTELIN</option>
                    <option value="HOTEL BONITA Classic - DURRËS">HOTEL BONITA Classic - DURRËS</option>
                    <option value="HOTEL AUSTRIA - VJENA">HOTEL AUSTRIA - VJENA</option>
                    <option value="HOTEL DUBAI Classic - DUBAI">HOTEL DUBAI Classic - DUBAI</option>
                    <option value="HOTEL ROME Classic - ITALY">HOTEL ROME Classic - ITALY</option>
                    <option value="HOTEL GJERMANI Classic - FRANKFURT">HOTEL GJERMANI Classic - FRANKFURT</option>
                </select>

                <label for="tipi_dhomes">Tipi i dhomes:</label>
                <select id="tipi_dhomes" name="tipi_dhomes" required><br>
                    <option value="Vetem">Vetem</option>
                    <option value="Per dy">Per dy</option>
                    <option value="Familje">Familje</option>
                </select>
                <select id="Qmimi" name="Qmimi" required><br>
                    <option value="50$ Nata">50$ Nata</option>
                    <option value="100$ Nata">100$ Nata</option>
                    <option value="200$ Nata">200$ Nata</option>
                </select>
                <button type="submit" name="kliko">Rezervo</button>
                <br>
                <hr>
            </form>
          </div>

          </div>
          <div id="News" class="tabcontent">
            <section class="lajmet">
                <article class="lajmi">
                    <img src="lajmi2.png" alt="Lajmi 1">
                    <h3>Wizz Air Rrit Fluturimet nëpër Europë</h3>
                    <p>Data: 08/12/2023</p>
                    <p>Wizz Air, një ndër linjat ajrore më të njohura në Europë, ka njoftuar rritjen e numrit të fluturimeve...</p>
                    <a href="#">Lexo më shumë</a>
                </article>
                <article class="lajmi">
                    <img src="lajmi3.png" alt="Lajmi 2">
                    <h3>Oferta Speciale për Bileta të Lira</h3>
                    <p>Data: 07/12/2023</p>
                    <p>Wizz Air prezanton ofertën e saj të re me bileta të lira për disa destinacione të përzgjedhura në Europë...</p>
                    <a href="#">Lexo më shumë</a>
                </article>
                <article class="lajmi">
                    <img src="lajmi4.png" alt="Lajmi 2">
                    <h3>Oferta Speciale për Bileta të Lira</h3>
                    <p>Data: 07/12/2023</p>
                    <p>"Wizz Air Njofton Fluturimet Drejt tre Destinacioneve të Reja në Europë"
                        Data: 10/12/2023
                        Wizz Air, një ndër kompanitë më të njohura të industrisë së transportit ajror, ka shpallur sot zyrtarisht zgjerimin 
                        e rrjetit të saj të fluturimeve me shpalljen e tre destinacioneve të reja tërheqëse në Europë.</p>
                    <a href="#">Lexo më shumë</a>
                </article>
                
            </section>

          </div>

          <div id="fluturimet" class="tabcontent">
            <p class="titulli">FLUTUEIMET JAVORE</p>
            <section id="fluturimet">
                <article class="fluturim">
                    <h2>Fluturim per New York</h2>
                    <p>Destinacioni:Stamboll ✈︎ New York</p>
                    <p>Data: 10-02-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per Paris</h2>
                    <p>Destinacioni:Tirana ✈︎ Paris</p>
                    <p>Data: 15-02-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per Germany</h2>
                    <p>Destinacioni:Prishtin ✈︎ Berlin</p>
                    <p>Data: 09-03-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per Switzerland</h2>
                    <p>Destinacioni:Skoje ✈︎ Zurich</p>
                    <p>Data: 25-01-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per Itay</h2>
                    <p>Destinacioni:Budapest ✈︎ Roma</p>
                    <p>Data: 12-02-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per Turkiye</h2>
                    <p>Destinacioni:Prishtin ✈︎ Ankara</p>
                    <p>Data: 15-05-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per Germany</h2>
                    <p>Destinacioni:Skopje ✈︎ Baden-Baden</p>
                    <p>Data: 14-01-2024</p>
                </article>
                <article class="fluturim">
                    <h2>Fluturim per France</h2>
                    <p>Destinacioni: Frankfurt ✈︎ Strasbourg</p>
                    <p>Data: 19-04-2024</p>
                </article>
            </section>
          </div>
          
          <div id="About" class="tabcontent">
            <h3>INFO RRETH WIZZ AIR</h3>
            <fieldset>
               <p> Wizz Air është një kompani ajrore liderë e specializuar në transportin ajror në Europë Qendrore dhe Lindore. 
                Me qendër operacionale në Budapest, Hungari, Wizz Air ofron një rrjet të gjerë të fluturimeve me 
                destinacione të ndryshme në mbarë Europën, duke siguruar mundësinë për udhëtime të këndshme dhe ekonomike.
                Nisur nga viti 2003, Wizz Air ka shërbyer me sukses një bazë të rritur të klientëve duke ofruar 
                çmime të arsyeshme dhe shërbime cilësore. 
                <br>
                <br>
                Flota e avionëve të saj, përbërë kryesisht nga avionë të serisë Airbus A320, është një nga flotat më të rinj dhe të modernizuar në botë.
                Kompania ka një angazhim të vazhdueshëm për të përmirësuar eksperiencën e udhëtimit, 
                duke ofruar shërbime të përshtatshme për pasagjerët dhe duke përdorur teknologjinë e fundit 
                për të bërë proceset e udhëtimit më të lehta dhe efikase.
            </p>
                <p>
                <img src="Stafi.png" alt="Stafi">
                </p>
            </fieldset>
        
             
          </div>
          
        
    <script>
        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
            }

        document.getElementById("defaultOpen").click();
             </script>
        
        <?php                
            require 'conectionnew.php';

            if(isset($_POST['kliko'])){
                $emri = $_POST['emri'];
                $email = $_POST['email'];
                $telefoni = $_POST['telefoni'];
                $datafillimit = $_POST['datafillimit'];
                $datambarimit = $_POST['datambarimit'];
                $tipi_dhomes = $_POST['tipi_dhomes'];
                $zgjedhehotelin=$_POST['zgejdhHotelin'];
                $qmimi=$_POST['Qmimi'];

                $query = "INSERT INTO Hotelet VALUES('','$emri','$email','$telefoni','$datafillimit','$datambarimit','$tipi_dhomes','$zgjedhehotelin','$qmimi')";
                mysqli_query($conn, $query);
                echo "<script> alert('Suksese') </script>";
                header('Location: another_page.php');
                exit();

            }
        
        ?>
        </body>

</html>