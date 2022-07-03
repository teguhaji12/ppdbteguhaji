<?php
if(isset($_SESSION['fi_id']) && isset($_SESSION['fi_us']) && isset($_SESSION['fi_ps']))
    {
        include ("../con_db/connection.php");
        $status=$_SESSION['fi_st'];
        $fi_id=$_SESSION['fi_id'];
        if($status=="Wawancara")
            {
                ?>
                <div class="panel-body pn">
                    <div style="border:1px solid white;width:100%;height:100%;overflow-y:hidden;overflow-x:scroll;">
                        <table class="table table-striped table-bordered table-hover" id="datatable2" cellspacing="0" style="width: 100%">
                            <thead>
                                <tr>
                                    <th style="width: 30%">Admin</th>
                                    <th style="width: 50%">Informasi</th>
                                    <th style="width: 10%">Tgl Input</th>
                                    <th style="width: 10%">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $ab_biaya=mysqli_query($conn,"Select tb_admin.nama_lengkap, tb_informasi.informasi, tb_informasi.tgl_input, tb_informasi.id_informasi from tb_admin, tb_informasi where tb_admin.id_admin=tb_informasi.id_admin order by tb_informasi.tgl_input desc ");
                                while($tp_biaya=mysqli_fetch_row($ab_biaya))
                                {
                                    ?>
                                    <tr>
                                        <td style="vertical-align: top;"><?php echo"$tp_biaya[0]";?></td>
                                        <td style="vertical-align: top;"><?php echo"$tp_biaya[1]";?></td>
                                        <td style="vertical-align: top;"><?php $fo_date=date("d-M-Y H:i:s",strtotime($tp_biaya[2])); echo"$fo_date";?></td>
                                        <td style="vertical-align: top;">
                                           
                                            <a href="up_info?proc_es=e&enctype=<?php $now=date("dmyhis");$ha=md5($now);echo"$now";?>&u=<?php echo"$tp_biaya[3]";?>&e_cty=<?php echo"$ha";?>">
                                                <button class="btn btn-success"><i class="fa fa-edit"></i></button>
                                            </a>

                                            <a href="up_info?proc_es=e&enctype=<?php $now=date("dmyhis");$ha=md5($now);echo"$now";?>&d=<?php echo"$tp_biaya[3]";?>&e_cty=<?php echo"$ha";?>">
                                                <button class="btn btn-danger"><i class="fa fa-close"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        <?php
            }
        else
            {
                ?>
                <script type="text/javascript">
                    window.location="../index";
                </script>
                <?php
            }
    }
else
    {
        ?>
        <script type="text/javascript">
            window.location="../index";
        </script>
        <?php
    }
?>

