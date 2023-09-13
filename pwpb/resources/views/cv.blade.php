<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e814145206.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,300&display=swap" rel="stylesheet">


    <title>CV Zulfan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Bricolage Grotesque', sans-serif;
        }

        body {
            background-color: #616A6B;
            background-position: cover;
            background-repeat: no-repeat;
        }

        .container {
            background-color: white;
            box-shadow:0 0 15px;
            width: 70%; 
            margin: auto;
			padding-bottom: 0.15px;
			padding-top: 0.15px;
        }

        .box-ver {
            justify-content: left;
            display: flex;
            background-color:#1E1E1E ;
            border-bottom-right-radius: 30px;
        }

        .box-ver img {
            border-radius: 50%;
            width: 150px;
            margin-top: 10px;
            margin-bottom:10px;
            padding: 0px 10px;
        }

        .box-ver img:hover {
           transform:scale(0.9);
           transition: .3s;
        }

        .line-ver {
            border-bottom: 3px solid #FFFFFF;
            width: 80%;
            height: 120px;
        }

        .line-ver  h1{
            text-align: center;
            color:#FFFFFF;
            font-size: 2.5rem;
            margin-top: 50px;
        }

        .line-ver  h4{
            text-align: center;
            color:#FFFFFF;
        }

        .wrap-box {
            display:flex;
            height:450px;
        }

        .box-hor {
            padding:8px 15px;
            width: 250px;
            height: 434px;
            background-color: #EDEDED;
        }

        .box-hor h2 {
            border-bottom: 3px solid #1E1E1E;
            width: 80%;
            height: 35px;
            margin-bottom:10px;
        }

        .box-hor span {
            font-size:1.2rem;
            font-weight:550;
            font-weight: bold;
            display: block;
        }

        .box-hor p {
            font-weight: 500;
            font-size: 1.1rem;
            margin: 6px;
        }

        .box-hor i{
            font-size:32px;
            margin:5px 5px;
        }

        .box {
            padding:8px 15px;
            width: 850px;
            height: 430px;
            margin:10px;
        }

        .box h2 {
            border-bottom: 3px solid #1E1E1E;
            width: 80%;
            height: 35px;
            margin-bottom:10px;
            padding:0px 10px;
        }

        .wrap-riw {
            height:220px;
        }


        .wrap-riw p{
            margin:18px;
            padding:8px 8px;
            font-weight:200x;

        }

        .kontak {
            margin-top:20px;
            padding:10px;
            width:400px;
            
        }

        .kontak span{
            font-size:1.2rem;
            font-weight: bold;
            color:#1E1E1E;
            margin:10px;
            
        }
        .kontak a {
            text-decoration:none;
        }
        .kontak i {
            color:#464646;
        }

        .back {
            float: left;
        }

        .back :hover {
            transform:scale(1.2);
            transition: 0.2s;
        }

        .back a {
            text-decoration: none;
            color: rgb(19, 19, 19);
            font-size: 1.2rem;
            font-weight: bold;
            background-color: #F7770F;
            border-radius: 0px 0px 20px;
            padding: 15px 10px 10px;
        }
        
        .back i {
            padding: 4px;
        }

    </style>    
</head>
<body>
    <div class="back">
        <a href="profile_pplg"><i class="fa-solid fa-arrow-left"></i>Back</a>
    </div>
        <div class="container">
                <div class="box-ver">
                    <img src="{{ asset('img/zulfan.jpg') }}">
                    <div class="line-ver">
                        <h1>Zulfan Arif Nur Zaky</h1>
                        <h4>Web Developer</h4>
                    </div>
                </div>
            <div class="wrap-box">    
                <div class="box-hor">
                        <h2>Profile</h2>
                            <span>Tanggal Lahir:</span>
                                <p>Bandung, 06 Mei 2006</p>
                            <span>Umur:</span>   
                                <p>17 Tahun</p> 
                            <span>Hobi:</span>
                                <p>• Olahraga</p>
                                <p>• Menonton Film</p>
                            <span>Alamat:</span>
                                <p>Kp.Pasirkaliki Reuma No.26, RT.08, RW.19, Kec.Coblong, Kota Bandung.</p>
                            <span>Media Sosial:</span>
                                <a href="https://www.instagram.com/zlfnarif_/?next=%2F">
                                <i class="fa-brands fa-instagram"></i></a>
                </div>            
                <div class="box">
                    <div class="wrap-riw">
                        <h2>Riwayat Pendidikan</h2>
                            <p>• SD Darul Hikam (2013-2019)</p>
                            <p>• SMPN 7 Bandung (2019-2022)</p>
                            <p>• SMKN 2 Bandung (2022-2025)</p>       
                    </div>                
                        <h2>Kontak</h2>
                    <div class="kontak">
                                <a href="tel:+6282119757291"><i class="fa-solid fa-phone"></i><span>:0821-1975-7291</span></a>
                                    <br>
                                <a href="mailto: nurzaky2006@gmail.com"><i class="fa-solid fa-envelope"></i><span>:nurzaky2006@gmail.com</span></a>
                    </div>            
                </div> 
            </div>                       
        </div>
</body>
</html>