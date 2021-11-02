cambiarSelect()
        function cambiarSelect(){
            for (let index = 0; index < 7; index++) {
            console.log(index)
            var select = document.getElementById("SOs"+index);
            select.addEventListener('change', 
            function (){
                var SOselect = document.getElementById("SOs"+ index).selectedIndex;
                console.log(SOselect);

                switch (SOselect) {
                    case 1:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='1.1'>1.1</option>" + "<option value='1.2'>1.2</option>";
                        break;

                    case 2:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='2.1'>2.1</option>" + "<option value='1.2'>2.2</option>";
                        break;

                    case 3:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='3.1'>3.1</option>" + "<option value='3.2'>3.2</option>";
                    break;

                    case 4:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='4.1'>4.1</option>" + "<option value='4.2'>4.2</option>";
                    break;

                    case 5:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='5.1'>4.1</option>" + "<option value='5.2'>5.2</option>";
                    break;

                    case 6:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='6.1'>6.1</option>" + "<option value='6.2'>6.2</option>";
                    break;

                    case 7:
                        document.getElementById("PIs"+ index).innerHTML = "<option value='7.1'>7.1</option>" + "<option value='7.2'>7.2</option>";
                    break;

                    default:
                        document.getElementById("PIs"+ index).innerHTML = "";
                        break;
                }
        });
            
        }
        }

