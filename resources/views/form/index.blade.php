@extends('layouts.app')

@section('title')
    Form
@endsection

@section('head')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Enquete Carbon Footprint</h1>
            </div>
        </div>

        <div class="row">
            <form name="form1" class="form-horizontal" role="form" method="POST" action="{{ url('form/send') }}">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('q1') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="grijzestroom" class="col-md-4">Grijze stroom: verbruik in kWh deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="grijzestroom" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="grijzestroomco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('q2') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="windwaterkrachtzonnestroom" class="col-md-4">Nederlandse groene stroom: verbruik
                                in kWh deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="windwaterkrachtzonnestroom" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="windwaterkrachtzonnestroomco2" readonly="" size="8"
                                       onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q3') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="stadsverwarming" class="col-md-4">Stadsverwarming: verbruik in GJ deze
                                week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="stadsverwarming" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="stadsverwarmingco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q4') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="grijsgas" class="col-md-4">Grijs gas: verbruik in m3 deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="grijsgas" size="8" onchange="update(this.form)">
                                <input type="text" name="grijsgasco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q5') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="drinkwater" class="col-md-4">Drinkwater: verbruik in m3 deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="drinkwater" size="8" onchange="update(this.form)">
                                <input type="text" name="drinkwaterco2" readonly="" size="8" onfocus="blur()"> kg

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q6') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="dieselauto" class="col-md-4">Diesel personenauto: verbruik in km deze
                                week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="dieselauto" size="8" onchange="update(this.form)">
                                <input type="text" name="dieselautoco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q7') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="benzineauto" class="col-md-4">Benzine dezesonenauto: verbruik in km deze
                                week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="benzineauto" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="benzineautoco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q8') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="lpgauto" class="col-md-4">LPG personenauto: verbruik in km deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="lpgauto" size="8" onchange="update(this.form)">
                                <input type="text" name="lpgautoco2" readonly="" size="8" onfocus="blur()"> kg

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q9') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="elektrischrijden" class="col-md-4">Elektrisch (met grijze stroom): verbruik in
                                km deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="elektrischrijden" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="elektrischrijdenco2" readonly="" size="8" onfocus="blur()"> kg

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q10') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="trein" class="col-md-4">Trein: Uw verbruik in km deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="trein" size="8" onchange="update(this.form)">
                                <input type="text" name="treinco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q11') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="bustram" class="col-md-4">Bus: verbruik in km deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="bustram" size="8" onchange="update(this.form)">
                                <input type="text" name="bustramco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q12') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="metrotram" class="col-md-4">Metro/Tram: verbruik in km deze week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="metrotram" size="8" onchange="update(this.form)">
                                <input type="text" name="metrotramco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q13') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="kortevliegreis" class="col-md-4">Vliegreis Europa: verbruik in km deze
                                week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="kortevliegreis" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="kortevliegreisco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('q14') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="langevliegreis" class="col-md-4">Vliegreis internationaal: verbruik in km deze
                                week</label>
                            <div class="col-md-6">
                                <input tabindex="1" type="text" name="langevliegreis" size="8"
                                       onchange="update(this.form)">
                                <input type="text" name="langevliegreisco2" readonly="" size="8" onfocus="blur()"> kg
                            </div>
                        </div>

                        <!-- call results -->

                        <div class="form-group{{ $errors->has('q15') ? ' has-error' : '' }}"
                             style="margin-left:0; margin-right:0;">
                            <label for="calresult" class="col-md-4">Uw totaalresultaat voor deze week</label>
                            <div class="col-md-6">
                                <div class="cal-line totaal">
                                    <input type="hidden" name="fte" size="8" onchange="update(this.form)">
                                    <input type="hidden" name="fteco2" readonly="" size="8" onfocus="blur()">
                                    <input name="co2totaal" type="text" size="8" readonly="" onfocus="blur()"> kg
                                </div>
                            </div>
                        </div>

                        <!-- Submit -->

                        <div class="form-group" style="margin-left:0; margin-right:0;">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send form
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('footer')
    <script src="/js/form.js"></script>
@endsection
