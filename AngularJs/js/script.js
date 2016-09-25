var dataDoc = {
  urist_address:"Российский",
  index:656057,
  ogrn:312222309300017,
  region:"",
  ifns:"",
  area:"",
  surname:"",
  city:"",
  name:"",
  locality:"",
  patronymic:"",
  street:"",
  registration:"",
  home:"",
  housing:"",
  office:""
}

localStorage.setItem("document",JSON.stringify(dataDoc));

console.log("default data::"+localStorage.getItem("document"));
