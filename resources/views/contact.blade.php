@extends('layouts.app')

@section('content')


   <style> 
        h3 { 
            text-align: center; 
        } 
  
      
        .input { 
            margin: 6px; 
            padding: 10px; 
            display: block; 
            margin: auto; 
            color: black; 
            font-size: 30px; 
        } 
   
   
        #form_body { 
            border-radius: 12px; 
            height: 330px; 
            width: 400px; 
            background-color:  rgb(179, 217, 255); 
            border: 1px solid pink; 
            margin: auto; 
            margin-top: 72px; 
        } 
  
       
  
        #submit { 
            background-color:rgb(60, 185, 0); 
            width: 370px; 
        } 
    </style>

 

<body>
    <form method="POST" action="data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
        <div id="form_page">
 
            <div id="form_body">
                <div id="head">
                    <h3 id="heading">  Введите Json файл</h1>
                </div>
                <br />
                <div id="input_name" class="input">
                    <input id="name" type="text"
                        Placeholder="Название книги" name="name"
                        required>
                </div>
                <div id="input_class" class="input">
                    <input type="email" placeholder=
                        "Ваш емаил" name="email" required>
                </div>
                <div id="input_year" class="input">
                    <input id="age" type="number"
                        name="age"
                        placeholder="Ваш возраст(лет)">
                </div>
 
                <div class="id input">
                    <input id="submit" type="submit"
                        name="submit" value="submit"
                        onclick="on_submit()">
                </div>
            </div>
        </div>
    </form>
</body>
@endsection