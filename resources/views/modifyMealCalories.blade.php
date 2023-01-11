@extends('layout')
@section('content')

<script>
    function cal(){
      var names=document.getElementsByName('subtotal[]');
      var subtotal=0;
      var cboxes=document.getElementsByName('mid[]');
      var len=cboxes.length;
      for(var i=0;i<len;i++){
         if(cboxes[i].checked){
            subtotal=parseFloat(names[i].value)+parseFloat(subtotal);
         }
      }
      document.getElementById('sub').value=subtotal;
   }
</script>

<div class = "row">
    <div class = "col-sm-2">&nbsp;</div>
    <div class = "col-sm-8">

        <table class = "table table-bordered">
            <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>Food Name</td>
                    <td>Calory</td>
                    <td>Quantity</td>
                </tr>
            </tbody>

            <tbody>
                @foreach($meals as $meal)
                <tr>
                    <td>
                    <input type="checkbox" name="mid[]" id="mid[]" value="{{$meal->mid}}" onclick="cal()">
                    <input type="hidden" name="subtotal[]" id="subtotal[]" value="{{$meal->mealQty*$meal->calory}}">
                    </td>
                    <td>{{$meal->name}}</td>
                    <td name="mealCalory[]">{{$meal->calory}}</td>
                    <td name="mealQuantity[]">{{$meal->mealQty}}</td>
                    <td>
                    
                    <a href="{{route ('deleteMeal', ['id' => $meal->mid])}}" class="btn btn-danger btn-xs" ><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>

            <tbody>
            <tr align="right">
                    <td colspan="5">&nbsp;</td>
                    <td>Calories<i> </i> <input type="text" value="0" name="sub" id="sub" readonly></td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class = "col-sm-2">&nbsp;</div>
</div>

@endsection