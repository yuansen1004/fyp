@extends('layout')
@section('content')
<script>
    function cal(){
        let button = document.getElementById('calculate');
        button
            const height = parseInt(document.getElementById('height').value);
            const weight = parseInt(document.getElementById('weight').value);
            const result = document.getElementById('output');

            let height_status = false, weight_status = false;

            if(height == '' || isNaN(height) || (height <=0)){
                document.getElementById('height_error').innerHTML = '<span style="color: red;">Please provide a valid height</span>';
            }else{
                document.getElementById('height_error').innerHTML = '';
                height_status = true;
            }

            if(weight == '' || isNaN(weight) || (weight <=0)){
                document.getElementById('weight_error').innerHTML = '<span style="color: red;">Please provide a valid weight</span>';
            }else{
                document.getElementById('weight_error').innerHTML = '';
                weight_status = true;
            }

            if(height_status && weight_status){
                const bmi = (weight / ((height * height) / 10000)).toFixed(2);

                if(bmi < 18.5){
                    result.innerHTML = 'Your BMI is ' + bmi + ' (<span style="color: orange;">Under Weight</span>)';
                }else if(bmi >=18.5 && bmi <=24.9){
                    result.innerHTML = 'Your BMI is ' + bmi + ' (<span style="color: green;">Normal</span>)';
                }else if(bmi >=25 && bmi <=29.9){
                    result.innerHTML = 'Your BMI is ' + bmi + ' (<span style="color: orange;">Over Weight</span>)';
                }else if(bmi >=30 && bmi <=34.9){
                    result.innerHTML = 'Your BMI is ' + bmi + ' (<span style="color: red;">Obesity Class I</span>)';
                }else if(bmi >=35 && bmi <=39.9){
                    result.innerHTML = 'Your BMI is ' + bmi + '(<span style="color: red;">Obesity Class II</span>)';
                }else{
                    result.innerHTML = 'Your BMI is ' + bmi + '(<span style="color: red;">Obesity Class III</span>)';
                }
            }else{
                alert('The form has errors!!!');
                result.innerHTML = '';
            }
        ;
    }
</script>
<style>
    #check{
        font-family: cursive;
        background-color: white;
        position: center;
        border-radius: 10px;
        top: 50%;
        left: 50%;
        width: 400px;
        height: 370px;
    }
    #check h2{
        position: center;
    }
    #calculate{
        background-color: #c0ecff;
    }
</style>
<div class="row">
<div class="col-sm-12">&nbsp;</div><br><br>
<div class="col-sm-4">
    <h3>BMI introduction</h3>
    <p>BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height. Specifically, the value obtained from the calculation of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between. These ranges of BMI vary based on factors such as region and age, and are sometimes further divided into subcategories such as severely underweight or very severely obese. Being overweight or underweight can have significant health effects, so while BMI is an imperfect measure of healthy body weight, it is a useful indicator of whether any additional testing or action is required. Refer to the table below to see the different categories based on BMI that are used by the calculator.</p><br>
</div>
<div class="col-sm-4" align="center">
    <div class="wrapper" id="check">
        <br><h2>Check your BMI here!!</h2><br>
        <p>Height: 
            <input type="text" id="height" placeholder="CM"><br><span id="height_error"></span>
        </p>
        <p>Weight: 
            <input type="text" id="weight" placeholder="KG"><br><span id="weight_error"></span>
        </p>
        <p id="output"></p>
        <button id="calculate" onclick="cal()">Calculate</button>
    </div>
</div>
<div class="col-sm-4">
    <h3>BMI table</h3>
    <table class="table table-bordered" style="background-color: white;">
        <tr>
            <td><Strong>Category</Strong></td>
            <td><Strong>BMI range</Strong></td>
        </tr>
        <tr>
            <td>Severe Thinness</td>
            <td>< 16</td>
        </tr>
        <tr>
            <td>Moderate Thinness</td>
            <td>16 - 17</td>
        </tr>
        <tr>
            <td>Mild Thinness</td>
            <td>17 - 18.5</td>
        </tr>
        <tr>
            <td>Normal</td>
            <td>18.5 - 25</td>
        </tr>
        <tr>
            <td>Overweight</td>
            <td>25 - 30</td>
        </tr>
        <tr>
            <td>Obese Class I</td>
            <td>30 - 35</td>
        </tr>
        <tr>
            <td>Obese Class II</td>
            <td>35 - 40</td>
        </tr>
        <tr>
            <td>Obese Class III</td>
            <td>> 40</td>
        </tr>
    </table>
</div>
</div>
@endsection