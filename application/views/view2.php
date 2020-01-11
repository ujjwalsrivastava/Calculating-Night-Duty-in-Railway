<?php
include 'header.php';?>
<div class="container">
               <h1 class="text-center">Train database</h1>
               <?php echo form_open('Crore/record');?>



               <div class="form-row">
                         <div class="form-group col-md-6">

                                        <?php echo form_error('tno'); ?>
                                        <input type="text" class="form-control" name="tno" id="from"
                                                  placeholder="Train No" />

                         </div>
                         <div class="form-group col-md-6" >

                                        <?php echo form_error('date'); ?>
                                        <input type="text" class="form-control date" name="date" id="from"
                                                  placeholder="yyyy-mm-dd" data-provide="datepicker" data-date-format="yyyy-mm-dd"/>

                         </div>
               </div>

               <div class="form-row">
                         <div class="form-group col-md-6">

                                        <?php echo form_error('from'); ?>
                                        <input type="text" class="form-control" id="from" name="from" placeholder="From" />

                         </div>
                         <div class="form-group col-md-6">

                                        <?php echo form_error('to'); ?>
                                        <input type="text" class="form-control" name="to" id="to" placeholder="To" />

                         </div>
               </div>
               <div class="form-row">
                         <div class="form-group col-md-6">

                                        <?php echo form_error('dept'); ?>
                                        <input type="time" class="form-control" id="from" name="dept"
                                                  placeholder="Departure Time" />

                         </div>
                         <div class="form-group col-md-6">

                                        <?php echo form_error('arrt'); ?>
                                        <input type="time" class="form-control" id="to" name="arrt"
                                                  placeholder="Arrival Time" />

                         </div>
               </div>

               <label><strong>Object of Journey</strong></label>
               <select class="browser-default custom-select mb-4" name="ojj">
                         <option value="" disabled>Choose option</option>
                         <option value="Monitoring and Counselling" selected>Monitoring and Counselling</option>
                         <option value="Ambush Check">Ambush Check</option>
                         <option value="Third line piloting">Third line piloting</option>
                         <option value="Ghat training">Ghat training</option>
                         <option value="VIP movement">VIP movement</option>
                         <option value="Handling and Training">Handling and Training</option>
                         <option value="Third line">Third line</option>
                         <option value="Piloting">Piloting</option>
               </select>

               <div class="form-row">
                         <div class="form-group col-md-6">

                                        <?php echo form_error('kms'); ?>
                                        <input type="text" class="form-control" id="from" placeholder="Kms" name="kms" />

                         </div>
               </div>

               <div class="form-group">

                         <textarea class="form-control rounded-0" name="remark" id="exampleFormControlTextarea2" rows="2"
                                        placeholder="Remarks"></textarea>
               </div>

               <button type="submit" class="btn btn-lg btn-warning btn-block shadow">Submit</button>

               <?php
          echo form_close();
                         ?>
</div>
<div class="container">
               <div class="row mt-5">
                         <div class="col-lg-12">
                                        <table class="table">
                                                  <thead class="thead-dark">
                                                            <tr>
                                                                           <th>Train No<br />Date</th>
                                                                           <th>From<br />To</th>
                                                                           <th>Dept<br />Arrival</th>
                                                                           <th>Object of Journey</th>
                                                                           <th>Kms</th>
                                                                           <th>Remarks</th>
                                                                           <th>Night Duty</th>
                                                                           <th>Action</th>
                                                            </tr>
                                                  </thead>
                                                  <tbody>
                                                            <?php
          if(isset($data)){
          foreach ($data as $row): ?>
                                                            <tr>
                                                                           <td><?php echo $row->train_no;?><br><?php echo $row->date;?>
                                                                           </td>
                                                                           <td><?php echo $row->from_f;?><br><?php echo $row->to_t;?>
                                                                           </td>
                                                                           <td><?php $td=$row->dep; echo $td;?><br><?php $ta=$row->arrival; echo $ta;?>
                                                                           </td>
                                                                           <?php 
            $var=explode(':',$td);
            $var2=explode(':',$ta);
            $t1=($var[0]*60)+($var[1]);
            $t2=($var2[0]*60)+($var2[1]);
            if($t1<1320 and $t1>360 and $t2<1320 and $t2>360 and $t1<$t2)
            {
                $t1=480;
            }
            elseif($t1<1320 and $t1>360){
            $t1=0;
            }
            elseif($t1>1320 and $t1<=1440){
            $t1=$t1-1320;
            }
            elseif($t1<360)
            {
                $t1=$t1+120;
            }
            if(  $t2<1320 and $t2>360 )
            {
                $t2=480;
            }
            elseif($t2>1320 and $t2<=1440)
            {
                $t2=$t2-1320;
            }
            elseif($t2<360)
            {
                $t2=$t2+120;
            }
            $ndm=$t2-$t1;
            $hour=$ndm/60;
            $timeArr2= explode('.',$hour);
            $sm=$timeArr2[0]*60;
            $ndm2=$ndm-$sm;
            $timeArr2[1]=$ndm2;
            $time= implode(':',$timeArr2);
            $va=explode(':',$td);
            $va2=explode(':',$ta);
            $tq=($va[0]*60)+($va[1]);
            $tw=($va2[0]*60)+($va2[1]);
            ?>
                                                                           <td><?php echo $row->object;?></td>
                                                                           <td><?php echo $row->km;?></td>
                                                                           <td><?php echo $row->remark;?></td>
                                                                           <td><?php echo $time; ?></td>
                                                                           <td><?php echo anchor(base_url('Crore/delete2/').$row->id,'<button type="submit" class="btn btn-lg btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>');?>
                                                                           </td>

                                                            </tr>
                                                            <?Php endforeach; }?>


                                                  </tbody>
                                        </table>
                         </div>
               </div>

               <?php
include 'footer.php';
?>