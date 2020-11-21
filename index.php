<?php 
    include("components/header.php");
?>  

<?php

    
    $orderBy = '';
    $where = [];
    $whereCondition = '';

    $book_name = '';
    $release_date = '';
    $order_parameter = ''; 

    if(!empty($_GET) && isset($_GET['order'])) {
        $orderValue = $_GET['order'];
        $orderParameters = explode('-', $orderValue);
        
        if(count($orderParameters) == 2) {
            $fieldName = $orderParameters[0]; // id, book_name
            $fieldValue = $orderParameters[1]; // asc, desc

            if ( in_array($fieldName, ['id', 'book_name']) && in_array($fieldValue, ['asc', 'desc']) ) {
                $orderBy = " ORDER BY " . $fieldName . " " . $fieldValue;
                $order_parameter = $_GET['order'];
            }            

        }

    }

    if (!empty($_GET) && isset($_GET['book_name']) && $_GET['book_name'] != '') {
        $where[] = "`book_name` LIKE '%".$_GET['book_name']."%'";
        $book_name = $_GET['book_name'];
    }

    if (!empty($_GET) && isset($_GET['release_date']) && $_GET['release_date'] != '') {
        $where[] = "`release_date` = ".$_GET['release_date'];
        $release_date = $_GET['release_date'];
    }

    if (!empty($where)) {
        $whereCondition = implode(" AND ", $where);
    }

    // if($whereCondition != '') {
    //     $query = "SELECT *  FROM books WHERE " . $whereCondition;
    // } else {
    //     $query = "SELECT *  FROM books ";
    // }

    // $query .= $orderBy;
     
    $query = "SELECT * 
                FROM books " . ( $whereCondition != '' ? " WHERE ".$whereCondition : '' ) . $orderBy;

    $students = $myDatabase->prepare($query);
    $students->execute();

?>

<section id="list-section">
    <div class="container">
        <div class="content">

            <div class="filters">
                <form action="">
                    <div class="form-group">
                        <input type="text" 
                            placeholder="Book Name" 
                            name="book_name" 
                            value="<?= $book_name ?>">
                    </div>
                    <div class="form-group">
                        <select name="release_date" id="">
                            <option value="" <?= $release_date == '' ? 'selected' : '' ?>>Select Year</option>
                            <?php for ($i=2018; $i < 2023; $i++) { 
                                ?>
                                    <option value="<?= $i ?>" <?= $release_date == $i ? 'selected' : '' ?>><?= $i ?></option>
                                <?php
                            }?>
                        
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="order" id="">
                            <option value="" <?= $order_parameter == '' ? 'selected' : '' ?> >Select Order</option>
                            <option value="id-asc" <?= $order_parameter == 'id-asc' ? 'selected' : '' ?>>Order by ID ASC</option>
                            <option value="id-desc" <?= $order_parameter == 'id-desc' ? 'selected' : '' ?>>Order by ID DESC</option>
                            <option value="book_name-asc" <?= $order_parameter == 'book_name-asc' ? 'selected' : '' ?>>Order by Name ASC</option>
                            <option value="book_name-desc" <?= $order_parameter == 'book_name-desc' ? 'selected' : '' ?>>Order by Name DESC</option>
                        </select>
                    </div>
                    <button type="submit">Search</button>
                </form>
            </div>

            <table id="book-list">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Book's Name</td>
                        <td>Author</td>
                        <td>Release Date</td>
                        <td>Source</td> 
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $students->fetch()) {
                        ?>
                        <tr>
                            <td><?= $row["id"]?></td>
                            <td><?= $row["book_name"]?></td>
                            <td><?= $row["author"]?></td>
                            <td><?= $row["release_date"]?></td>
                            <td>
                                <?php 
                                    if ($row["source"]) {
                                        if (file_exists('uploads/'.$row['source'])) {
                                            ?>
                                                <a target="_blank" href="uploads/<?= $row["source"] ?>"><?= $row["source"] ?></a>
                                            <?php
                                        }
                                    }
                                 ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?= $row["id"] ?>" class="action-btn btn-edit">
                                    Edit
                                </a>
                                <button onclick="confirmDelete(this, <?= $row['id'] ?>)">Delete</button>
                                <!-- <form action="" method="post" onsubmit="return confirmDelete()">
                                    <input type="hidden" value="delete-book" name="action">
                                    <input type="hidden" value="<?= $row["id"] ?>" name="id">
                                    <button type="submit">Delete</button>
                                </form> -->
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include("components/footer.php") ?>