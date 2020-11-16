

<Form method="POST" action="{{route('offers.store')}}">
@csrf
    enter name : <input type="text" name="name" /><br/>
    @error('name')
<small style="color:red">{{$message}}</small><br/>
    @enderror
    enter price : <input type="text" name="price" /><br/>
    @error('price')
    <small style="color:red">{{$message}}</small><br/>
    @enderror
    enter details : <input type="text" name="details" /><br/>
    @error('details')
    <small style="color:red">{{$message}}</small><br/>
    @enderror
    <input type="submit" value="save" />

</Form>
