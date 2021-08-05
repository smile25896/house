var l = console.log;

Array.prototype.getValueByProperty = function(property) {
    var arr = [];
    for(var i=0; i<this.length; i++)
        arr.push(this[i][property]);        
    
    return arr.toString();
}

Array.prototype.sortBy = function(property) {
    return this.sort(function(a, b){
        return a[property] - b[property];
    });
}

Array.prototype.maxBy = function(property) {
    if(this.length > 0){
        var val = this[0][property];
        for(var i=1;i<this.length;i++)
            val = Math.max(val, this[i][property]);
        
        return val;
    }
}

Array.prototype.minBy = function(property) {
    if(this.length > 0){
        var val = this[0][property];
        for(var i=1;i<this.length;i++)
            val = Math.min(val, this[i][property]);
        
        return val;
    }
}

//Array.prototype.setAllProperty = function(property, value) {
//    for(var i=0;i<this.length;i++)
//        this[i][property] = value;
//}

Array.prototype.filterProperty = function(property, value) {
    return this.filter(function(item, index, list){
        return (item[property] == value);
    });
}

Array.prototype.contains = function(v) {
    for(var i = 0; i < this.length; i++) {
        if(this[i] === v) return true;
    }
    return false;
}

Array.prototype.unique = function() {
    var arr = [];
    for(var i = 0; i < this.length; i++) {
        if(!arr.contains(this[i])) {
            arr.push(this[i]);
        }
    }
    return arr; 
}

Array.prototype.uniqueObjects = function() {
    function compare(a, b){
        for(var prop in a){
            if(a[prop] != b[prop]){
                return false;
            }
        }
        return true;
    }
    return this.filter(function(item, index, list){
        for(var i=0; i<index;i++){
            if(compare(item,list[i])){
                return false;
            }
        }
        return true;
    });
}

Date.prototype.format = function (fmt) { 
    var o = {
        "M+": this.getMonth() + 1, 
        "d+": this.getDate(), 
        "H+": this.getHours(), 
        "m+": this.getMinutes(), 
        "s+": this.getSeconds(), 
        "q+": Math.floor((this.getMonth() + 3) / 3), 
        "S": this.getMilliseconds()
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    
    return fmt;
}

Date.prototype.clone = function () {
    return new Date(this.getTime());
}

Number.prototype.toJsTimestamp = function () {
    return this.valueOf() * 1000;
}

Number.prototype.toDate = function (fmt) {
    return (fmt) ? new Date(this).format(fmt) : new Date(this);
}

Number.prototype.getAllDayTimestamp = function () {
    var date = new Date(this);
    return new Date(date.getFullYear(), date.getMonth(), date.getDate()).getTime();
}

function uniqueid(){
    var idstr=String.fromCharCode(Math.floor((Math.random()*25)+65));
    do {                
        var ascicode=Math.floor((Math.random()*42)+48);
        if (ascicode<58 || ascicode>64){
            idstr+=String.fromCharCode(ascicode);    
        }
    } while (idstr.length<32);

    return (idstr);
}

function padLeft(str, lenght){
    if (typeof str != 'undefined') {
        if(str.toString().length >= lenght)
            return str.toString();
        else
            return padLeft("0" + str.toString(), lenght);
    }
}

function padRight(str, lenght){
    if (typeof str != 'undefined') {
        if(str.toString().length >= lenght)
            return str.toString();
        else
            return padRight(str.toString() + "0", lenght);
    }
}

function numberOfDays(year, month) {
    var d = new Date(year, month, 0);
    return d.getDate();
}
