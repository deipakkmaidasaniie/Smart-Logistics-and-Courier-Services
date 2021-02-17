<html>
    <script>
     function cityPrice()
     {
         if(document.getElementById("city").value=="mumbai")
             {
                document.getElementById("price").innerHTML="Price is 300";    
             }
     }
        </script>
     <div class="form-group" data-for="city">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-4t">Destination(city)</label>
                         <select class="form-control" name="cAdd" rows="7" id="city" onSelect="cityPrice()" >
                             <option value="select">---Select---</option>
                              <option value="ahmedabad" >Ahmedabad</option>
                                        <option value="mumbai">Mumbai</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="chennai">Chennai</option>
                                        <option value="Kolkata">Kolkata</option>
                                
                                    </select>
                        <p id="price"></p>
                        </div>
</html>