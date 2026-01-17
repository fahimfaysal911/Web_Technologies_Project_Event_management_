


function Test(){
    const testJSON = [
    {
        id:"1",
        name:"Fahim",
        email:"fahimfaysal737@gmail.com",
        dob:"2001-09-11"
    },
    {
        id:"2",
        name:"Fahim",
        email:"fahimfaysal737@gmail.com",
        dob:"2001-09-11"
    },
    {
        id:"3",
        name:"Fahim",
        email:"fahimfaysal737@gmail.com",
        dob:"2001-09-11"
    },
    {
        id:"4",
        name:"Fahim",
        email:"fahimfaysal737@gmail.com",
        dob:"2001-09-11"
    },
    {
        id:"5",
        name:"Fahim",
        email:"fahimfaysal737@gmail.com",
        dob:"2001-09-11"
    },
    {
        id:"6",
        name:"Fahim",
        email:"fahimfaysal737@gmail.com",
        dob:"2001-09-11"
    },
];
    const str = JSON.stringify(testJSON);
    console.log("Printing test stringify data", str);

    const parsedData = JSON.parse(str);
    console.log("Printing test parsed data", parsedData);

    const data = parsedData.find(item => item.id === "4");
    console.log("Printing test find data", data);
    return false;
}
