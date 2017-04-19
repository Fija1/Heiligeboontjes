
function update(a) {
    var b = a.grijzestroom.value,
        c = a.stadsverwarming.value,
        d = a.grijsgas.value,
        e = a.dieselauto.value,
        e = a.dieselauto.value,
        f = a.benzineauto.value,
        g = a.lpgauto.value,
        h = a.trein.value,
        i = a.bustram.value,
        l = a.drinkwater.value,
        m = a.kortevliegreis.value,
        n = a.langevliegreis.value,
        o = a.windwaterkrachtzonnestroom.value,
        p = a.elektrischrijden.value,
        q = a.metrotram.value,

        r = a.fte.value,

        s = 0 * o; //this is zero because it should have no influence on the equation

    //no j+k


    // calculations for eminissions
    a.windwaterkrachtzonnestroomco2.value = s.toFixed(2); // needs to stay zero
    var t = (.107 * p)/52;
    a.elektrischrijdenco2.value = t.toFixed(2);
    var u = (.09 * q)/52;
    a.metrotramco2.value = u.toFixed(2);
    var v = (1 * r)/52;
    a.fteco2.value = v.toFixed(2);
    var w = (.526 * b)/52;
    a.grijzestroomco2.value = w.toFixed(2);
    var x = (.02 * c)/52;
    a.stadsverwarmingco2.value = x.toFixed(2);
    var y = (1.884 * d)/52;
    a.grijsgasco2.value = y.toFixed(2);
    var z = (.213 * e)/52;
    a.dieselautoco2.value = z.toFixed(2);
    var A = (.224 * f)/52;
    a.benzineautoco2.value = A.toFixed(2);
    var B = (.196 * g)/52;
    a.lpgautoco2.value = B.toFixed(2);
    var C = (.039 * h)/52;
    a.treinco2.value = C.toFixed(2);
    var D = (.14 * i)/52;
    a.bustramco2.value = D.toFixed(2);

    var G = (.298 * l)/52;
    a.drinkwaterco2.value = G.toFixed(2);
    var H = (.2 * m)/52;
    a.kortevliegreisco2.value = H.toFixed(2);
    var I = (.15 * n)/52;
    a.langevliegreisco2.value = I.toFixed(2);

    a.co2totaal.value =(w + x + y + z + A + B + C + D + G + H + I + s + t + u).toFixed(2);

    var ra = a.co2totaal.value / 20;
    totaal = Math.round(100 * ra) / 100;
    var sa = a.co2totaal.value / 250;
    totaal = Math.round(100 * sa) / 100, $("div.cta").click(function () {
    }),

        $("#grijzestroomco2").html(a.grijzestroomco2.value),
        $("#windwaterkrachtzonnestroomco2").html(a.windwaterkrachtzonnestroomco2.value),
        $("#stadsverwarmingco2").html(a.stadsverwarmingco2.value),
        $("#grijsgasco2").html(a.grijsgasco2.value),
        $("#drinkwaterco2").html(a.drinkwaterco2.value),
        $("#dieselautoco2").html(a.dieselautoco2.value),
        $("#benzineautoco2").html(a.benzineautoco2.value),
        $("#lpgautoco2").html(a.lpgautoco2.value),
        $("#elektrischrijdenco2").html(a.elektrischrijdenco2.value),
        $("#treinco2").html(a.treinco2.value),
        $("#bustramco2").html(a.bustramco2.value),
        $("#metrotramco2").html(a.metrotramco2.value),
        $("#kortevliegreisco2").html(a.kortevliegreisco2.value),
        $("#langevliegreisco2").html(a.langevliegreisco2.value),
        $("#langevliegreisco2").html(a.langevliegreisco2.value),
        $("#co2totaal").html(a.co2totaal.value),

        document.getElementById("grijzestroomC").value = w.toFixed(2),
        document.getElementById("stadsverwarmingC").value = x.toFixed(2),
        document.getElementById("grijsgasC").value = y.toFixed(2),
        document.getElementById("drinkwaterC").value = G.toFixed(2),
        document.getElementById("dieselautoC").value = z.toFixed(2),
        document.getElementById("benzineautoC").value = A.toFixed(2),
        document.getElementById("lpgautoC").value = B.toFixed(2),
        document.getElementById("treinC").value = C.toFixed(2),
        document.getElementById("bustramC").value = D.toFixed(2),
        document.getElementById("kortevliegreisC").value = H.toFixed(2),
        document.getElementById("langevliegreisC").value = I.toFixed(2),
        document.getElementById("windwaterkrachtzonnestroomC").value = s.toFixed(2),
        document.getElementById("elektrischrijdenC").value = t.toFixed(2),
        document.getElementById("metrotramC").value = u.toFixed(2),

        document.getElementById("totaalC").value = (w + x + y + z + A + B + C + D + G + H + I + s + t + u).toFixed(2),
        //no E+F

        document.getElementById("grijzestroomI").value = b,
        document.getElementById("stadsverwarmingI").value = c,
        document.getElementById("grijsgasI").value = d,
        document.getElementById("drinkwaterI").value = l,
        document.getElementById("dieselautoI").value = e,
        document.getElementById("benzineautoI").value = f,
        document.getElementById("lpgautoI").value = g,
        document.getElementById("treinI").value = h,
        document.getElementById("bustramI").value = i,
        document.getElementById("kortevliegreisI").value = m,
        document.getElementById("langevliegreisI").value = n,
        document.getElementById("windwaterkrachtzonnestroomI").value = o,
        document.getElementById("elektrischrijdenI").value = p,
        document.getElementById("metrotramI").value = q
}




