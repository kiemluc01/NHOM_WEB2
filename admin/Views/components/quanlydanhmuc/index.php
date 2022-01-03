</div> <!-- page content -->
    <div class="right_col" role="main">
        <div class="btn">
            <div id="filter">
                <div class="filter-ft__ev >
                    <input type="submit" value="Thêm" name="add" id="add">
                </div>
                 <div class="filter-ft__ev" >
                    <input type="text" placeholder="Nhập tên sách" name = "namebook" id="namebook"/>
                </div>
                 <div class="filter-ft__ev" >
                    <input type="submit" value="Tìm Kiếm" name="search" id="search">
                </div>
                <div class="filter-ft__ev" >
                    <select>
                        <option value="tất cả">Tìm kiếm theo danh muc</option>
                    </select>
            </div>
        </div>
    </div>
           
        <div class="tb table">
    <table>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Số sách trong danh mục</th>
        </tr>
        <?php 
            $category = loadModel('Listcategories');
            $result = $category->getAll();
            $i =1;
            if($result->num_rows>0)
            while($row = $result->fetch_assoc()){ ?>
    <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['Tendanhmuc']; ?></td>
            <td><?php echo $row['sosach']; ?></td>
            <td>
                <input type="submit" value="Xóa" name="<?php echo $row['idDanhmuc']; ?>" id="<?php echo $row['idDanhmuc']; ?>">
                <input type="submit" value="Sửa" name="<?php echo $row['idDanhmuc']; ?>" id="<?php echo $row['idDanhmuc'];?>">
            </td>
        </tr>
            <?php }
        ?>
    </table>
          </div>
          </div>
          <!-- /page content -->
          
          <!-- footer content -->
<!-- /footer content -->
