function entryValidation() {
    var a = document.getforms["entryForm"]["name"];
    var b = document.getforms["entryForm"]["location"];
    var c = document.getforms["entryForm"]["title"];
    var d = document.getforms["entryForm"]["report"];
    var e = document.getforms["entryForm"]["img"];
    var f = document.getforms["entryForm"]["type"];
    var g = document.getforms["entryForm"]["threat"];
    var h = document.getforms["entryForm"]["status"];

    if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "" || g == "" || h == ""){
        alert("Name must be filled out");
        return false;
    }

}