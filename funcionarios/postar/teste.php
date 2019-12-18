    <div class="col-md-6">
     <label>Fornecedor:</label>
     <select name="id_for" class="form-control" style="margin-bottom:20px;">
      <?php
      while ($row = $res->fetch_assoc()) {
            echo "
                    <option value=".$row['id'].">".$row['nome']."</option>";
      }
      ?>
      </select>
      </div>