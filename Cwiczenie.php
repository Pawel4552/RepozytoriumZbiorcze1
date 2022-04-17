<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="30"></meta>
</head>
<style>
body{
    background-color: #999966;
    margin:0px;
    font-family: sans-serif;
    font-size: 13px;
}
header{
    background-color: #494949;
    border-bottom: 1px solid #800000;
    
}
footer{
    background-color: #494949;
    height: 150px;
    border-top: 1px solid #800000;
}
.inner-div{
    height: 120px;
    /*display: inline-block;*/
}
header h1{
    font-family: 'Trebuchet MS', 'Lucida sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-style: bold;
    font-variant: small-caps;
    color:white;
    padding-top: 25px;
    padding-left: 35px;
    margin-top: 0px;
}
header h3{
    font-family: 'Trebuchet MS', 'Lucida sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-style: bold;
    font-variant: small-caps;
    color:white;
    padding-top: 0px;
    padding-left: 35px;
}
footer ul{
    text-align:center;
    margin-bottom: 10px;
    margin-top: 25px;
}
footer li{
    font-variant: small-caps;
    font-family: 'Roboto Condensed', sans-serif;
    font-size:18px;
    color:white;
    border-bottom: 1px solid #cc9900;
    padding-bottom: 5px;
    margin-top: 8px;
    margin-right: 20px;
    display: inline-block;
    text-decoration: none;
    transition: .15s;
    transition-timing-function: ease-out;
}
footer div{
    width:775px;
    margin-right: auto;
    margin-left: auto;
    padding: 0px;
}
div p{
    text-align: center;
    width:inherit;
    color:white;
    font-size:11px;
    margin-top:20px;
}
nav ul{
    list-style-type: line;
    background-color: #800000;
    margin:0px;
}
nav li{
    display: inline-block;
    color:white;
    padding:10px 20px;
    border: 1px solid white;
    border-radius: 3px;
    font-variant: small-caps;
    font-size: 16px;
    font-style: bold;
    transition-property: background-color;
    transition-property: text-shadow;
    transition: .25s;
    transition-timing-function: ease-in;
}
nav li:hover{
    background-color: #ca1c1c;
    text-shadow: 2px 1px gray;
}
footer li:hover{
    padding-bottom:2px;
    border-bottom: 2px solid #cc9900;
}
main{
    text-align: center;
}
article{
    text-align: center;
}
 article div{
        width: 300px;
        height: 250px;
        border: 1px solid black;
        border-radius: 10px;
        text-align: center;
        font-family: "Roboto Condensed", sans-serif;
        margin:  auto;
        display: inline-block;
        position: relative;
}
    article div img{
        width: 50%;
        height: 50%;
        padding-top: 8px;
        margin-left: 0px;
    }
     article div p{
        font-size: 11px;
    }
    .order{
        font-size: 18px;
        font-weight: bold;
        font-variant: small-caps;
        color: royalblue;
    }
    .hint{
        font-size:11px;
        border:1px solid rgba(0,0,255);
        border-radius: 3px;
        background-color: #4169e1d8;
        color:white;
        width: 150px;
        height: auto;
        padding-top: 3px;
        padding-bottom: 3px;
        text-align: center;
         position: absolute;
        display: none;
        top: -5px;
        left: 75px;
        z-index: 1;

    }
    .hint span{
        color: black;
        font-weight: bold; 
    }
    article div:hover p.hint{
        display: block;
        -webkit-animation: slide-down .5s ease-out;
        -moz-animation: slide-down .5s ease-out;
    }
    /*safari&Chrome*/
    @-webkit-keyframes slide-down{
        100%{opacity: 1; -webkit-transform: translateX(0%);}
        0%{opacity: 0; -webkit-transform: translateY(100%);}
    }
    /*Firefox*/
    @-moz-keyframes slide-down{
        0%{opacity:0; -moz-transform: translateX(-25%);}
        100%{opacity:1; -moz-transform: translateY(0%);}
    }

    table{
        width: 850px;
        border-radius: 6px;
        border: solid 1px #d4d4d4;
        border-spacing: 0px;
        margin:45px;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
    }
    th{
        background-color: #ebebeb;
        padding: 2px;
        border-bottom: solid red 1.5px;
        font-family: Cambria;
        color: #6e6e6e;
        font-size: 1.1em;
        text-align: center;
    }
    tr{
        height: 35px;
    }
    tr:hover{
        background-color: #e3f3fc;
    }
    tr{
        text-align: center;
        /*padding-top: auto;
        padding-bottom: auto;*/
        vertical-align: middle;
        border-bottom: #d4d4d4 solid 1px;
        font-family: Verdana;
        color: #949494;
        font-size: 95%;
    }
    td:hover{
        border-right: #e3e3e3 solid 0.5px;
    }
    .dane{
        font-family: Verdana;
        color: #949494;
        font-size: 12px;
        font-style: bold;
    }
    .small{
        font-size: 10px;
        margin: 0px;
        padding: 0px;
        text-indent: 10px;
        color: blue;
    }
</style>
<body>
    <header>
        <div class="inner-div">
            <h1>
                Zadanie ćwiczeniowe CSS
            </h1>
            <h3>
                Zastosowanie arkuszy CSS do formatowania elementów układu XHTML - część [1]
            </h3>
        </div>
    </header>
    <nav>
        <ul>
            <li>Start</li>
            <li>Oferta</li>
            <li>Kawiarki</li>
            <li>Ekspresy</li>
            <li>Serwis</li>
            <li>Promocja</li>
        </ul>
    </nav>
    <main>
        <article>
        <div id="Tab">
            <img src="coffee-machine.png">
            <p>
                Dostosuj ustawienia ekspresu do Twoich preferencji dzięki funkcji Moja Kawa. W prosty sposób wybierz jedno z trzech ustawień mocy oraz ilości kawy.
            </p>
            <p class="order" id="close">Zamów teraz!</p>
            <p class="hint">
            Informacje o promocji oraz ofercie specjalnej dla klienta. Promocja obowiązuje zarejstrowanych użytkowników do dnia 30 września 2020r.<br>
            <span>1970.50zł</span>
            </p>
        </div><div id="Tab">
            <img src="coffee-machine_2.png">
            <p>
                Dostosuj ustawienia ekspresu do Twoich preferencji dzięki funkcji Moja Kawa. W prosty sposób wybierz jedno z trzech ustawień mocy oraz ilości kawy.
            </p>
            <p class="order" id="close">Zamów teraz!</p>
            <p class="hint">
            Informacje o promocji oraz ofercie specjalnej dla klienta. Promocja obowiązuje zarejstrowanych użytkowników do dnia 30 września 2020r.<br>
            <span>1970.50zł</span>
            </p>
        </div><div id="Tab">
            <img src="coffee-machine_3.png">
            <p>
                Dostosuj ustawienia ekspresu do Twoich preferencji dzięki funkcji Moja Kawa. W prosty sposób wybierz jedno z trzech ustawień mocy oraz ilości kawy.
            </p>
            <p class="order" id="close">Zamów teraz!</p>
            <p class="hint">
            Informacje o promocji oraz ofercie specjalnej dla klienta. Promocja obowiązuje zarejstrowanych użytkowników do dnia 30 września 2020r.<br>
            <span>1970.50zł</span>
            </p>
        </div><div id="Tab">
            <img src="thermometer.png">
            <p>
                Dostosuj ustawienia ekspresu do Twoich preferencji dzięki funkcji Moja Kawa. W prosty sposób wybierz jedno z trzech ustawień mocy oraz ilości kawy.
            </p>
            <p class="order" id="close">Zamów teraz!</p>
            <p class="hint">
            Informacje o promocji oraz ofercie specjalnej dla klienta. Promocja obowiązuje zarejstrowanych użytkowników do dnia 30 września 2020r.<br>
            <span>1970.50zł</span>
            </p>
        </div>

    </article>
    <table>
        <th>ID Ucznia</th><th>Nazwa Klasy</th><th>Przedmiot</th><th>Kategoria</th><th>Imię</th><th>Nazwisko</th>
        <tr><td>01</td><td class="dane">Technik informatyk<br><span class="small">VIB</span></td><td class="dane">Systemy Zarządzania Bazami Danych</td><td class="dane">Przedmiot Zawodowy</td><td class="dane">Jan</td><td class="dane">Kowalski</td></tr>
        <tr><td>02</td><td class="dane">Technik informatyk<br><span class="small">VIB</span></td><td class="dane">Aplikacje Internetowe</td><td class="dane">Przedmiot Zawodowy</td><td class="dane">Kamil</td><td class="dane">Ślimak</td></tr>
        <tr><td>03</td><td class="dane">Technik informatyk<br><span class="small">VIB</span></td><td class="dane">Programowanie Strukturalne I Obiektowe</td><td class="dane">Przedmiot Zawodowy</td><td class="dane">Dariusz</td><td class="dane">Nowak</td></tr>
    </table>
    </main>
    <footer>
        <ul>
            <li>Kontakt</li>
            <li>Obsługa klienta</li>
            <li>Płatność</li>
            <li>Dostawa</li>
            <li>Prywatność</li>
        </ul>
        <div>
            <p>ghgjhkmbknmxzbmvnb,nmb,mbbnmdiklfjkafjkhfjhgjjhhgjhgjdhgjdhgghgjghjhdjghhdghgdhjghjhgghdghgdhjdgjghdjgjghjghjghdhggdjgjghjdhgjhjhdjhjghgjhg
                gdjkgjdkgjkjkdjgkjjkdjggdjgkjgkjdgdgkgkdgkgkgkkgjkdvnmknnnnnvkvnvkvnkdnvkdnvkdkvkdvkdvnnlssvnslnvssvdldvslvnsnnlsvknsnvdllsdvlssklnskvnsnvnknsdns
                ghgjhkmbknmxzbmvnb,nmb,mbbnmdiklfjkafjkhfjhgjjhhgjhgjdhgjdhgghgjghjghgjhkmbknmxzbmvnb,nmb,mbbnmdiklfjkafjkhfjhgjjhhgjhgjdhgjdhgghgjghjghgjhkmbknmxzbmvnb,nmb,mbbnmdiklfjkafjkhfjhgjjhhgjhgjdhgjdhgghgjghj
            </p>
        </div>
        <div style="font-size:20px;">
            <?php
            
             if(file_exists("licznik.txt"))
             {
                 $file=fopen("licznik.txt", 'r');
                 $licznik=fgets($file);
                 fclose($file);
             }
             else{
                 $licznik=0;
             }
             $licznik++;
             $fp=fopen("licznik.txt", "w");
             fputs($fp, $licznik);
             fclose($fp);
             echo "Licznik odwiedzin: " .$licznik; 
            ?>
        </div>
    </footer>
</body>
</html>