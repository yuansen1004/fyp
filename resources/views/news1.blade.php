@extends('layout')
@section('content')
<style>
    #news{
        font-family: cursive;
        background-color: transparent;
    }
    #news li{
        font-size: 20px;
    }
    #news p{
        font-size: 15px;
    }
    #news ul li{
        font-size: 15px;
    }
</style>
<div class="row">
    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-10" align="center"><img src="{{asset('image/how to eat healthy.jpg')}}" alt="" width="500"></div>
    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-1">&nbsp;</div>
    <div class="col-sm-10" id="news">
        <br><h2 align="center">8 tips helps to eat healthy</h2><br>
        <ol>
            <li>Base your meals on higher fiber starchy carbohydrates.</li>
                <p>Just a little bit more than one-third of your diet should consist of starchy carbohydrates. Potatoes, bread, rice, pasta, and cereals are among them. Select products with more fibre or wholegrain content, including wholewheat pasta, brown rice, or potatoes that still have their skins on. Compared to white or refined starchy carbohydrates, they have more fibre and might make you feel fuller for longer.</p>
            <li>Eat a lot of fruits and vegetables</li>
                <p>You should consume at least 5 servings of different fruits and vegetables each day, according to recommendations. They can be juiced, dried, tinned, frozen, or fresh. 80g is the weight of a serving of fresh, tinned, or frozen fruit or vegetables. 30g is the size of a serving of dried fruit. A 150ml glass of fruit juice, vegetable juice, or a smoothie also counts as one serving, but you should only consume one of these per day due to their high sugar content and potential for tooth decay.</p>
            <li>Eat more fish, including a portion of oily fish</li>
                <p>In addition to having a lot of vitamins and minerals, fish is a wonderful source of protein. Try to consume at least two meals of fish every week, at least one of which should be oily. Omega-3 fats, which are abundant in oily fish, may aid in the prevention of heart disease. You have the option of fresh, frozen, or canned fish, but keep in mind that canned and smoked fish may include a lot of salt.</p>
                <p>Oily fish includes:</p>
                <ul>
                    <li>Salmon</li>
                    <li>trout</li>
                    <li>herring</li>
                    <li>sardines</li>
                    <li>pilchards</li>
                    <li>mackerel</li>
                </ul>
            <li>Cut down on saturated fat and sugar</li>
                <ul>
                    <li>Saturated fat</li>
                        <p>You need some fat in your diet, but you need to watch how much and what kind of fat you consume. Saturated and unsaturated fats are the 2 primary kinds. Overconsumption of saturated fat can raise blood cholesterol levels, which raises your risk of heart disease. Men should consume no more than 30g of saturated fat per day on average. Women should consume no more than 20g of saturated fat per day on average. Although children under the age of five should not have a low-fat diet, children under the age of 11 should consume less saturated fat than adults. Many foods, including fatty meat cuts, sausages, butter, and hard cheese, contain saturated fat. Try to cut down on your saturated fat intake and choose foods that contain unsaturated fats instead, such as vegetable oils and spreads, oily fish, and avocados.  Use a little vegetable, olive, or low-fat spread in place of butter, lard, or ghee for a healthier option.</p>
                    <li>Sugar</li>
                        <p>Regularly consuming sugary meals and beverages raises your chances of obesity and tooth damage. Sugary foods and beverages frequently contain significant amounts of energy (measured in calories or kilojoules), which, if taken too frequently, can lead to weight gain. Furthermore, especially if consumed between meals, they might result in tooth decay. Free sugars are all sugars that are either naturally present in honey, syrups, unsweetened fruit juices, and smoothies or added to meals or beverages. Surprisingly large levels of free sugars are present in many packaged meals and beverages. Many foods, including sugary beverages, breakfast cereals, cakes, and biscuits, contain free sugars.</p>
                </ul>
            <li>Eat less salt: (no more than 6g a day for adults)</li>
                <p>Your blood pressure might increase if you consume too much salt. Heart disease and stroke are more likely to occur in those with high blood pressure. You can be eating too much even if you don't salt your food. Breakfast cereals, soups, bread, and sauces all come pre-seasoned with almost three-quarters of the salt you consume. To cut down on the use of salt, refer to the labels on your food. A portion of food is rich in salt if it contains more than 1.5g of salt per 100g. No more than 6g (or about a teaspoonful) of salt should be consumed daily by adults and children aged 11 and older. Even less should be given to younger kids.</p>
            <li>Get active and be a healthy weight</li>
                <p>Regular exercise, together with a healthy diet, may help lower your chance of developing major medical disorders. Additionally, it's crucial for your general health and wellbeing. Obesity and excess weight can contribute to diseases including type 2 diabetes, certain malignancies, heart disease, and stroke. Your health might also be impacted by being underweight. Aim to eat less and be more active if you want to lose weight. You can keep your weight in check by eating a healthy, balanced diet.</p>
            <li>Drink more water</li>
                <p>To prevent dehydration, you must drink plenty of water. The government recommends drinking 6 to 8 glasses a day. In addition to this, you also get fluids from the food you eat. All non-alcoholic beverages are acceptable, but the healthiest options include water, low-fat milk, and low-sugar beverages such as tea and coffee. Drinks with added sugar should be avoided because they are high in calories. Plus, they can damage your teeth. Smoothies and unsweetened fruit juices both contain high amounts of free sugar. A moderate glass of fruit juice, vegetable juice, and smoothies should not exceed 150ml of your total daily fluid intake.</p>
            <li>Don't skip breakfast</li>
                <p>Some people believe skipping breakfast may aid in their weight loss. However, a balanced diet that includes a nutritious breakfast that is high in fibre and low in fat, sugar, and salt will help you obtain the nutrients you need for optimum health. A wonderful and healthy meal is a bowl of whole-grain, lower-sugar cereal with semi-skimmed milk and fruit slices on top.</p>
        </ol>
    </div>
</div>
@endsection