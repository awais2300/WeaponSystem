<?php $this->load->view('cdr/common/header'); ?>
<?php !isset($MissionReliability1) ? $MissionReliability1 = 0 : $MissionReliability1; ?>
<?php !isset($MissionReliability2) ? $MissionReliability2 = 0 : $MissionReliability2; ?>
<?php !isset($MissionReliability3) ? $MissionReliability3 = 0 : $MissionReliability3; ?>
<?php !isset($MissionReliability4) ? $MissionReliability4 = 0 : $MissionReliability4; ?>
<?php !isset($reliability) ? $reliability = 0 : $reliability; ?>
<?php !isset($time_entered) ? $time_entered = null : $time_entered; ?>
<?php !isset($button_clicked) ? $button_clicked = null : $button_clicked; ?>

<script src="<?= base_url(); ?>assets/js/canvasjs.min.js"></script>
<style>
    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 0.75rem;
        padding-bottom: 0px;
    }

    .img-ship {
        /* background: url('<?= base_url() ?>assets/img/ship3.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* Add the blur effect */
        /* filter: blur(2px); */
        /* -webkit-filter: blur(8px); */
    }

    .img-ship2 {
        /* background: url('<?= base_url() ?>assets/img/ship1.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* Add the blur effect */
        /* filter: blur(2px); */
        /* -webkit-filter: blur(8px); */
    }

    .img-ship3 {
        /* background: url('<?= base_url() ?>assets/img/ship3.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* filter: blur(2px); */
    }

    .img-ship4 {
        /* background: url('<?= base_url() ?>assets/img/ship1.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* filter: blur(2px); */
    }

    .img-ship5 {
        /* background: url('<?= base_url() ?>assets/img/ship1.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* filter: blur(2px); */
    }

    .img-ship6 {
        /* background: url('<?= base_url() ?>assets/img/ship1.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* filter: blur(2px); */
    }

    .img-ship7 {
        /* background: url('<?= base_url() ?>assets/img/ship1.jpg'); */
        background-position: center;
        background-size: cover;
        height: 120px;
        border-radius: 20px;
        border:3px solid black;
        /* filter: blur(2px); */
    }

    .bg-text {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 22%;
        left: 28%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }

    .bg-text2 {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 22%;
        left: 70%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }

    .bg-text3 {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 44%;
        left: 28%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }

    .bg-text4 {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 44%;
        left: 70%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }

    .bg-text5 {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 66%;
        left: 28%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }

    .bg-text6 {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 66%;
        left: 70%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }

    .bg-text7 {
        color: white;
        font-weight: bold;
        position: absolute;
        top: 89%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 20%;
        height: 25%;
        text-align: center;
    }


    .dot {
        height: 180px;
        width: 180px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
    }

    .center-text {
        margin-top: 75px;
        font-weight: bold;
        color: black;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .box {
        display: inline-block;
        border: 1px solid black;
        padding: 10px 0px;
        margin: 0px 25px;
        width: 140px;
        text-align: center;
    }

    .box_center {
        display: inline-block;
        border: 1px solid black;
        padding: 10px 0px;
        margin-left: -5px;
        width: 140px;
        text-align: center;
    }

    .box.hidden {
        visibility: hidden;
    }

    .lines {
        margin-left: 100px;
        height: 29px;
    }

    .line_bottom {
        display: inline-block;
        border: 1px solid black;
        border-top: none;
        border-right: none;
        height: 30px;
        width: 200px;
        margin-left: -5px;
        margin-right: 0;
    }

    .line_top {
        display: inline-block;
        border: 1px solid black;
        border-bottom: none;
        border-right: none;
        height: 30px;
        width: 200px;
        margin-left: -5px;
        margin-right: 0;
    }

    .line_middle {
        display: inline-block;
        border: 1px solid black;
        border-bottom: none;
        border-right: none;
        border-left: none;
        height: 4px;
        width: 200px;
        margin-left: -5px;
        margin-right: 0;

    }

    .connect {
        height: 30px;
        border-right: 1px solid black;
    }

    .connect.three {
        width: 295px;
        margin-top: -6px;
    }
</style>

<div class="container">
    <!-- <h1 class="h4 text-gray-900">Welcome Commanding Officer!</h1> -->
    <div class="card-body">

        <div class="form-group row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header bg-custom1">
                        <h1 class="h4 text-white" style="text-align:center; font-size:xx-large; text-transform:uppercase; font-weight:600;"><?php echo $this->session->userdata('username'); ?></h1>
                    </div>

                    <div class="card-body bg-custom3" style="background-color: 315deg;background-image: linear-gradient(315deg, #d4418e 15%, #4B0082 85%);">
                        <div class="row" style="padding:1px;">
                            <div class="col-sm-5 mx-1 my-1 img-ship bg" style="margin-left:75px !important;"></div>
                            <div class="bg-text">
                                <a href="<?= base_url(); ?>Cdr">
                                    <h1 class="h3 text-center" style="margin-top: 20px; color:#DCDCDC;"><strong>COMDES18</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>

                            <div class="col-sm-5 mx-1 my-1 img-ship2" style="padding:5px;"></div>
                            <div class="bg-text2">
                                <a href="<?= base_url(); ?>Cdr/navigate/<?= 'COMDES25' ?>">
                                    <h1 class="h3 text-center" style="margin-top: 20px; color:#DCDCDC;"><strong>COMDES25</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>
                        </div>

                        <div class="row " style="padding:1px;">
                            <div class="col-sm-5 mx-1 my-1 img-ship3" style="margin-left:75px !important;"></div>
                            <div class="bg-text3">
                                <a href="<?= base_url(); ?>Cdr/navigate/<?= 'COMPETRON10' ?>">
                                    <h1 class="h3 text-center " style="margin-top: 20px; color:#DCDCDC; width:245px"><strong>COMPETRON10</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>

                            <div class="col-sm-5 mx-1 my-1 img-ship4" style="padding:5px;"></div>
                            <div class="bg-text4">
                                <a href="<?= base_url(); ?>Cdr/navigate/<?= 'COMAUX9' ?>">
                                    <h1 class="h3 text-center" style="margin-top: 20px; color:#DCDCDC;"><strong>COMAUX9</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>
                        </div>

                        <div class="row " style="padding:1px;">
                            <div class="col-sm-5 mx-1 my-1 img-ship5" style="margin-left:75px !important;"></div>
                            <div class="bg-text5">
                                <a href="<?= base_url(); ?>Cdr/navigate/<?= 'COMAUX21' ?>">
                                    <h1 class="h3 text-center " style="margin-top: 20px; color:#DCDCDC;"><strong>COMAUX21</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>

                            <div class="col-sm-5 mx-1 my-1 img-ship6" style="padding:5px;"></div>
                            <div class="bg-text6">
                                <a href="<?= base_url(); ?>Cdr/navigate/<?= 'SUBRON' ?>">
                                    <h1 class="h3 text-center" style="margin-top: 20px; color:#DCDCDC;"><strong>SUBRON</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>                        
                        </div>

                        <div class="row " style="padding:1px;">

                        <div class="col-sm-10 mx-1 my-1 img-ship7" style="margin-left:75px !important; width:10px !important"></div>
                            <div class="bg-text7">
                                <a href="<?= base_url(); ?>Cdr/navigate/<?= 'COMNAV' ?>">
                                    <h1 class="h3 text-center " style="margin-top: 20px; color:#DCDCDC;"><strong>COMNAV</strong></h1>
                                    <h2 class="h5 text-center " style="color:white;"><strong>A: 0.00%</strong></h2>
                                    <h2 class="h5 text-center " style="color:white;"><strong>R: 0.00%</strong></h2>
                                </a>
                            </div>
                        </div>

                       
                      
                    </div>

                </div>
            </div>
        </div>


    </div>
</div>

</div>

<?php $this->load->view('common/footer'); ?>

<script>
    $('#show_ship_detail').on('click', function() {
        $('#ship_detail').show();
    });

    window.onload = function() {

        $count = 1;
        $('#table_rows_head > th').each(function(index, td) {
            
            var a1 = document.getElementById("AAW" + $count);
            var a_r1 = document.getElementById("AAW_R" + $count);
            var a2 = document.getElementById("ASuW" + $count);
            var a_r2 = document.getElementById("ASuW_R" + $count);
            var a3 = document.getElementById("ASW" + $count);
            var a_r3 = document.getElementById("ASW_R" + $count);
            var a4 = document.getElementById("EW" + $count);
            var a_r4 = document.getElementById("EW_R" + $count);

            if (a1 != null) {
                if (parseFloat(a1.innerHTML) >= 75 && a1 != null) {
                    a1.style.color = "#008000";
                    a1.style.fontSize = "18px";
                    a1.innerHTML = "<b>" + a1.innerHTML + "</b>";
                } else if (parseFloat(a1.innerHTML) >= 50 && parseFloat(a1.innerHTML) < 75) {
                    a1.style.color = "#ffa500";
                    a1.style.fontSize = "18px";
                    a1.innerHTML = "<b>" + a1.innerHTML + "</b>";
                } else if (parseFloat(a1.innerHTML) < 50) {
                    a1.style.color = "#ff0000";
                    a1.style.fontSize = "18px";
                    a1.innerHTML = "<b>" + a1.innerHTML + "</b>";
                }
            }

            if (a_r1 != null) {
                if (parseFloat(a_r1.innerHTML) >= 75 && a_r1 != null) {
                    a_r1.style.color = "#008000";
                    a_r1.style.fontSize = "18px";
                    a_r1.innerHTML = "<b>" + a_r1.innerHTML + "</b>";
                } else if (parseFloat(a_r1.innerHTML) >= 50 && parseFloat(a_r1.innerHTML) < 75) {
                    a_r1.style.color = "#ffa500";
                    a_r1.style.fontSize = "18px";
                    a_r1.innerHTML = "<b>" + a_r1.innerHTML + "</b>";
                } else if (parseFloat(a_r1.innerHTML) < 50) {
                    a_r1.style.color = "#ff0000";
                    a_r1.style.fontSize = "18px";
                    a_r1.innerHTML = "<b>" + a_r1.innerHTML + "</b>";
                }
            }


            if (a2 != null) {
                if (parseFloat(a2.innerHTML) >= 75) {
                    a2.style.color = "#008000";
                    a2.style.fontSize = "18px";
                    a2.innerHTML = "<b>" + a2.innerHTML + "</b>";
                } else if (parseFloat(a2.innerHTML) >= 50 && parseFloat(a2.innerHTML) < 75) {
                    a2.style.color = "#ffa500";
                    a2.style.fontSize = "18px";
                    a2.innerHTML = "<b>" + a2.innerHTML + "</b>";
                } else if (parseFloat(a2.innerHTML) < 50) {
                    a2.style.color = "#ff0000";
                    a2.style.fontSize = "18px";
                    a2.innerHTML = "<b>" + a2.innerHTML + "</b>";
                }
            }

            if (a_r2 != null) {
                if (parseFloat(a_r2.innerHTML) >= 75) {
                    a_r2.style.color = "#008000";
                    a_r2.style.fontSize = "18px";
                    a_r2.innerHTML = "<b>" + a_r2.innerHTML + "</b>";
                } else if (parseFloat(a_r2.innerHTML) >= 50 && parseFloat(a_r2.innerHTML) < 75) {
                    a_r2.style.color = "#ffa500";
                    a_r2.style.fontSize = "18px";
                    a_r2.innerHTML = "<b>" + a_r2.innerHTML + "</b>";
                } else if (parseFloat(a_r2.innerHTML) < 50) {
                    a_r2.style.color = "#ff0000";
                    a_r2.style.fontSize = "18px";
                    a_r2.innerHTML = "<b>" + a_r2.innerHTML + "</b>";
                }
            }

            if (a3 != null) {
                if (parseFloat(a3.innerHTML) >= 75) {
                    a3.style.color = "#008000";
                    a3.style.fontSize = "18px";
                    a3.innerHTML = "<b>" + a3.innerHTML + "</b>";
                } else if (parseFloat(a3.innerHTML) >= 50 && parseFloat(a3.innerHTML) < 75) {
                    a3.style.color = "#ffa500";
                    a3.style.fontSize = "18px";
                    a3.innerHTML = "<b>" + a3.innerHTML + "</b>";
                } else if (parseFloat(a3.innerHTML) < 50) {
                    a3.style.color = "#ff0000";
                    a3.style.fontSize = "18px";
                    a3.innerHTML = "<b>" + a3.innerHTML + "</b>";
                }
            }

            if (a_r3 != null) {
                if (parseFloat(a_r3.innerHTML) >= 75) {
                    a_r3.style.fontSize = "18px";
                    a_r3.style.color = "#008000";
                    a_r3.innerHTML = "<b>" + a_r3.innerHTML + "</b>";
                } else if (parseFloat(a_r3.innerHTML) >= 50 && parseFloat(a_r3.innerHTML) < 75) {
                    a_r3.style.color = "#ffa500";
                    a_r3.style.fontSize = "18px";
                    a_r3.innerHTML = "<b>" + a_r3.innerHTML + "</b>";
                } else if (parseFloat(a_r3.innerHTML) < 50) {
                    a_r3.style.color = "#ff0000";
                    a_r3.style.fontSize = "18px";
                    a_r3.innerHTML = "<b>" + a_r3.innerHTML + "</b>";
                }
            }

            if (a4 != null) {
                if (parseFloat(a4.innerHTML) >= 75) {
                    a4.style.color = "#008000";
                    a4.style.fontSize = "18px";
                    a4.innerHTML = "<b>" + a4.innerHTML + "</b>";
                } else if (parseFloat(a4.innerHTML) >= 50 && parseFloat(a4.innerHTML) < 75) {
                    a4.style.color = "#ffa500";
                    a4.style.fontSize = "18px";
                    a4.innerHTML = "<b>" + a4.innerHTML + "</b>";
                } else if (parseFloat(a4.innerHTML) < 50) {
                    a4.style.color = "#ff0000";
                    a4.style.fontSize = "18px";
                    a4.innerHTML = "<b>" + a4.innerHTML + "</b>";
                }
            }

            if (a_r4 != null) {
                if (parseFloat(a_r4.innerHTML) >= 75) {
                    a_r4.style.color = "#008000";
                    a_r4.style.fontSize = "18px";
                    a_r4.innerHTML = "<b>" + a_r4.innerHTML + "</b>";
                } else if (parseFloat(a_r4.innerHTML) >= 50 && parseFloat(a_r4.innerHTML) < 75) {
                    a_r4.style.color = "#ffa500";
                    a_r4.style.fontSize = "18px";
                    a_r4.innerHTML = "<b>" + a_r4.innerHTML + "</b>";
                } else if (parseFloat(a_r4.innerHTML) < 50) {
                    a_r4.style.color = "#ff0000";
                    a_r4.style.fontSize = "18px";
                    a_r4.innerHTML = "<b>" + a_r4.innerHTML + "</b>";
                }
            }
            $count++;
        });


        $t = $("#system_time").val();
        if ($t > 0) {
            $('#ship_detail').show();
        }


        $data = $("#availability_bar").html();
        $value = $data.substr(0, $data.length - 1);

        if ($value < 50) {
            $("#availability_bar").addClass('bg-danger');
        } else if ($value >= 50 && $value <= 75) {
            $("#availability_bar").addClass('bg-warning');
        } else if ($value > 75) {
            $("#availability_bar").addClass('bg-success');
        }

        $data = $("#reliability_bar").html();
        $value_rel = $data.substr(0, $data.length - 1);
        // alert($value);
        if ($value_rel < 50) {
            $("#reliability_bar").addClass('bg-danger');
        } else if ($value_rel >= 50 && $value_rel <= 75) {
            $("#reliability_bar").addClass('bg-warning');
        } else if ($value_rel > 75) {
            $("#reliability_bar").addClass('bg-success');
        }

        if ($value_rel > 0) {
            $('#reliability_chart').show();
        }

        function changeColor(chart) {
            for (var i = 0; i < chart.options.data.length; i++) {
                for (var j = 0; j < chart.options.data[i].dataPoints.length; j++) {
                    y = chart.options.data[i].dataPoints[j].y;
                    if (y > 75) {
                        chart.options.data[i].dataPoints[j].color = "green";
                    } else if ((y >= 50) && (y <= 75)) {
                        chart.options.data[i].dataPoints[j].color = "orange";
                    } else if (y < 50) {
                        chart.options.data[i].dataPoints[j].color = "red";
                    }
                }
            }
        }

        function onClick(e) {
            //alert(e.dataSeries.type + ", dataPoint { x:" + e.dataPoint.x + ", y: " + e.dataPoint.y + " }");
            if (e.dataPoint.x == 0) {
                window.location.href = "<?= base_url(); ?>mission/mission/AAW";
            } else if (e.dataPoint.x == 1) {
                window.location.href = "<?= base_url(); ?>mission/mission/ASuW";
            } else if (e.dataPoint.x == 2) {
                window.location.href = "<?= base_url(); ?>mission/mission/ASW";
            } else if (e.dataPoint.x == 3) {
                window.location.href = "<?= base_url(); ?>mission/mission/EW";
            }
        }

    }

    var dps = []; //Global
    var reliability;
    var enteredTime;

    // $('#system_time').on('focusout', function() {

    //     var time = $(this).val();

    //     $.ajax({
    //         url: '<?= base_url(); ?>Cdr/get_all_ships_reliability',
    //         method: 'POST',
    //         data: {
    //             'time': time
    //         },
    //         success: function(data) {

    //             $('#reliability_bar').html(data + "%");
    //             $('#reliability_bar').width(data * 5);
    //             reliability = data;
    //             enteredTime = time;
    //         },
    //         async: false
    //     });


    //     $.ajax({
    //         url: '<?= base_url(); ?>Cdr/PageReload',
    //         method: 'POST',
    //         data: {
    //             'time': enteredTime
    //         },
    //         success: function(data) {
    //             var newDoc = document.open("text/html", "replace");
    //             newDoc.write(data);
    //             newDoc.close();
    //         },
    //         async: false,
    //         error: function(data) {
    //             alert('failure');
    //         }
    //     });

    // });


    $('#Ship_name').on('change', function() {
        // alert('sds');
        var a = $(this).val();
        if ($(this).val() == 'Zafr') {
            window.location.href = "<?= base_url(); ?>Cdr/co/Ship1";
        } else if ($(this).val() == 'Saif') {
            window.location.href = "<?= base_url(); ?>Cdr/co/Ship2";
        } else if ($(this).val() == 'S/Sheer') {
            window.location.href = "<?= base_url(); ?>Cdr/co/Ship3";
        } else if ($(this).val() == 'ASLT') {
            window.location.href = "<?= base_url(); ?>Cdr/co/Ship4";
        }
    });
</script>