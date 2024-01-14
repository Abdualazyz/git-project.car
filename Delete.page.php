
 <?php
// كود PHP
include 'conn.php';
 
 $no = $_GET['$no'];
 
 $sql="delete from ca where no =".$no;
 
 if (mysqli_query($conn,$sql)){
 }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // تنفيذ إجراء الحذف هنا
    echo "<script>alert('تم حذف العنصر بنجاح.');</script>";
}

?>

<!-- نموذج لزر الحذف -->
<form method="POST" onsubmit="return confirmDelete()">
    <button type="submit">حذف</button>
</form>

<!-- الجزء الخاص بالـ script -->
<script>
function confirmDelete() {
    return confirm("هل أنت متأكد من رغبتك في حذف هذا العنصر؟");
}
</script>