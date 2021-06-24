<head>
<style type="text/css">
body {
    background-color: #e1e1e1;
    font-family: Roboto;
}
.container {
    max-width: 680px;
    width: 100%;
    margin: auto;
}
main {
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    color: #555555; 
}
.body h2 {
    font-weight: 300;
    color: #464646;
}
.logo {
    width: 150px;
    padding: 5px 5px;
}
.header-img {
    max-width: 100% !important;
    height: auto !important;
    width: 100%;
}
a {
    text-decoration: underline; 
    color: #0c99d5; 
}
.body {
    padding: 20px;
    background-color: white;
    font-family: Roboto; 
    font-size: 16px; 
    line-height: 22px; 
    color: #555555; 
}
button {
    background-color: #0c99d5;
    border: none;
    color: white;
    border-radius: 2px;
    height: 50px;
    max-width: 250px;
    padding: 0px 30px;
    font-weight: 500;
    font-family: Roboto; 
    font-size: 16px;
    margin: 10px 0px 30px 0px;
}
footer{
    padding-top: 50px;
    font-family: Roboto; 
    font-size: 14px; 
    line-height: 18px; 
    color: #738597;
    text-align: center;
}
footer img{
    width: 100px;
    margin: 24px 0px;
}
</style>
    <title>NEWSLETTER</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>

<body>
    <main class="container" style="font-family: Roboto;">
        <img src="https://rpl.pens.ac.id/project/ition/public/image/tentang/ition.png" class="header-img">
        <!--{{ url('image/tentang/ition-minimalis.png') }}-->
        <div class="body">
            <h2>Terima Kasih,</h2>
            
            <p>telah berlangganan informasi lomba terbaru dari kami. Nantikan informasi selengkapnya mengenai informasi lomba - lomba terbaru.</p>
            
            <a href="{{ url('') }}"><button>VISIT US!</button></a>
        </div>

    </main>

    <footer class="container" style="font-family: Roboto;">
        <p>Terima kasih telah membaca!</p>
        <p>Jika ada pertanyaan, Anda dapat <a href="https://wa.me/6287701437591">Hubungi Kami.</a> Jika email kami memiliki kekurangan, kami akan mengerti jika Anda <a href="{{ url('unsubscribe/'.$details['email']) }}">berhenti berlangganan.</a></p>
        
        <div>
            <a href="#">HIMIT</a> <span>|</span> <a href="https://https://www.pens.ac.id/">PENS</a>
            <p>Kelompok A4 Workshop Produksi Perangkat Lunak 2021</p>
            <P><a>Legal</a> <span>•</span> <a>Privacy</a></P>
        </div>

    </footer>
</body>