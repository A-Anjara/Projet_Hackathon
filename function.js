function show(target){
    t = document.getElementsByClassName(target);
    targets = t[0];
    if(window.getComputedStyle(targets).display== 'none'){
        console.log(" 1 Enter it's "+targets.style.display);
        targets.style.display = "block";
    }
    else{
        console.log("2 Enter it's "+targets.style.display);
        targets.style.display = "none";
    }
}