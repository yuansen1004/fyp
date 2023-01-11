@extends('layout')
@section('content')
<style>
    #container{
        font-family: cursive;
    }
    #container ol{
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient:vertical;
        overflow: hidden;
    }
    #container p{
        font-size: 15px;
    }
    #container li{
        font-size: 20px;
    }
    #span::before{
        content: 'show more...';
        color: #b66dff;
        cursor: pointer;
    }
    #container.active ol{
        display: block;
    }
    #container.active #span::before{
        content: 'show less';
    }

    #container1{
        font-family: cursive;
    }
    #container1 ol{
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient:vertical;
        overflow: hidden;
    }
    #span1::before{
        content: 'show more...';
        color: #b66dff;
        cursor: pointer;
    }
    #container1.active ol{
        display: block;
    }
    #container1.active #span1::before{
        content: 'show less';
    }
    #container1 li{
        font-size: 20px;
    }
    #container1 p{
        font-size: 15px;
    }

    #container2{
        font-family: cursive;
    }
    #container2 ol{
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient:vertical;
        overflow: hidden;
    }
    #span2::before{
        content: 'show more...';
        color: #b66dff;
        cursor: pointer;
    }
    #container2.active ol{
        display: block;
    }
    #container2.active #span2::before{
        content: 'show less';
    }
    #container2 li{
        font-size: 20px;
    }
    #container2 p{
        font-size: 15px;
    }
</style>

<div class="row">
    <div class="col-sm-12" style="font-size: 55px; font-family:cursive">
        <strong>News and Article</strong>
    </div>
    <div class="row featurette">
        <div class="col-sm-5"><img src="{{asset('image/stay healthy.jpg')}}" alt="" width="500"></div>
            <div class="col-sm-7">
                <div id="container">
                    <h4>5 ways to live healthy</h4>
                    <ol>
                        <li>Diet</li>
                        <p>Eat more fresh, unprocessed meals, drink 64 ounces of water daily, and consume little to no alcohol and caffeine.</p>
                        <li>Exercise</li>
                        <p>Get 150 minutes per week—or 30 minutes each day—of moderate-intensity aerobic exercise. Get two to three 20 to 30-minute strength-training sessions each week, concentrating on the main muscular groups.</p>
                        <li>Sleep</li>
                        <p>Try to obtain between seven and eight hours of sleep each night and maintain a regular sleep-wake cycle by going to bed and waking up at the same time each day.</p>
                        <li>Socialization</li>
                        <p>It lessens anxiety and tension while enhancing mental capacity, which helps prevent dementia, heart disease, and depression.</p>
                        <li>Have a primary care physician</li>
                        <p>All ages should schedule annual exams since they help identify diseases early, before they have major effects.</p>
                    </ol>
                    <span id="span"></span>
                    <script type="text/javascript">
                        document.getElementById('span').addEventListener('click',function(){
                            document.getElementById('container').classList.toggle('active');
                        });
                    </script>
                </div>
            </div>

    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-10"><hr class="featurette-devider"></div>
    <div class="col-sm-1">&nbsp;</div>

        <div class="col-sm-5"><img src="{{asset('image/how to eat healthy.jpg')}}" alt="" width="500"></div>
            <div class="col-sm-7">
                <div id="container1">
                    <h4>8 tips helps to eat healthy</h4>
                        <ol>
                            <li>Base your meals on higher fiber starchy carbohydrates.</li>
                                <p>Just a little bit more than one-third of your diet should consist of starchy carbohydrates.</p>
                            <li>Eat a lot of fruits and vegetables</li>
                                <p>You should consume at least 5 servings of different fruits and vegetables each day, according to recommendations.</p>
                            <li>Eat more fish, including a portion of oily fish</li>
                                <p>In addition to having a lot of vitamins and minerals, fish is a wonderful source of protein. Try to consume at least two meals of fish every week, at least one of which should be oily.</p>
                            <li>Cut down on saturated fat and sugar</li>
                            <ul>
                                <li>Saturated fat</li>
                                    <p>You need some fat in your diet, but you need to watch how much and what kind of fat you consume. Saturated and unsaturated fats are the 2 primary kinds. Overconsumption of saturated fat can raise blood cholesterol levels, which raises your risk of heart disease.</p>
                                <li>Sugar</li>
                                    <p>Regularly consuming sugary meals and beverages raises your chances of obesity and tooth damage. Sugary foods and beverages frequently contain significant amounts of energy (measured in calories or kilojoules), which, if taken too frequently, can lead to weight gain.</p>
                            </ul>
                            <li>Eat less salt: no more than 6g a day for adults</li>
                                <p>Your blood pressure might increase if you consume too much salt. Heart disease and stroke are more likely to occur in those with high blood pressure.</p>
                            <li>Get active and be a healthy weight</li>
                                <p>Regular exercise, together with a healthy diet, may help lower your chance of developing major medical disorders. Additionally, it's crucial for your general health and wellbeing.</p>
                            <li>Drink more water</li>
                                <p>To prevent dehydration, you must drink plenty of water. The government recommends drinking 6 to 8 glasses a day. In addition to this, you also get fluids from the food you eat.</p>
                            <li>Don't skip breakfast</li>
                                <p>Some people believe skipping breakfast may aid in their weight loss. However, a balanced diet that includes a nutritious breakfast that is high in fibre and low in fat, sugar, and salt will help you obtain the nutrients you need for optimum health.</p>
                            <a style="text-decoration: none" href="/news1">show more details →</a>
                        </ol>
                    <span id="span1"></span>
                    <script type="text/javascript">
                        document.getElementById('span1').addEventListener('click',function(){
                        document.getElementById('container1').classList.toggle('active');
                        });
                    </script>
                </div>
            </div>

    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-10"><hr class="featurette-devider"></div>
    <div class="col-sm-1">&nbsp;</div>

        <div class="col-sm-5"><img src="{{asset('image/healthy children.jpg')}}" alt="" width="500"></div>
            <div class="col-sm-7">
                <div id="container2">
                    <h4>8 Foods You Should Never Eat More Of (About Children)</h4>
                        <ol>
                            <li>The orange:</li>
                                <p>If you eat too many oranges, it can lead to "lutein skin disease", abdominal pain and diarrheal, and even bone problems. </p>
                            <li>Lentils:</li>
                                <p>Lentils contain a specific gene that causes goitre in humans and promotes the excretion of thyroxine, resulting in thyroxine deficiency. </p>
                            <li>Spinach:</li>
                                <p>Spinach is rich in oxalic acid, which produces calcium oxalate and zinc oxalate, two kinds of salts that are difficult for the human body to absorb, so they are easily eliminated by the body. </p>
                            <li>Eggs:</li>
                                <p>Eggs contain a variety of nutrients, but if you eat too many eggs, you will take in too much protein, which is easy to lead to overnutrition, and then lead to obesity. </p>
                            <li>Sunflower seeds:</li>
                                <p>Sunflower seeds contain a type of unsaturated fat. They will need to consume large amounts of vitamin B to digest these unsaturated fats. </p>
                            <li>Ginseng:</li>
                                <p>If the baby eats too much ginseng, it will lead to excessive secretion of sex hormones, which will lead to premature puberty or other abnormal body shape development.</p>
                            <li>Salt:</li>
                                <p>Children should not eat more than 5 grams of salt a day. If children eat too much salt, it is likely to cause high blood pressure, coronary heart disease, brain cancer and so on.</p>
                            <li>Saccharin:</li>
                                <p>Studies have shown that eating too much saccharin can cause diseases of blood vessels, heart, lungs</p>
                                <a style="text-decoration: none" href="/news2">show more details →</a>
                            </ol>
                    <span id="span2"></span>
                    <script type="text/javascript">
                        document.getElementById('span2').addEventListener('click',function(){
                        document.getElementById('container2').classList.toggle('active');
                        });
                    </script>
                </div>
            </div>
            
    </div>
    
</div>

@endsection