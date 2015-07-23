<?php
################################################################################
#  ชุดภาษาไทยหลังร้าน สำหรับ Opencart 1.4.6 โดย Somsak2004 วันที่ 3 เมษายน 2553
#  ปรับปรุง สำหรับรุ่น 1.4.9 โดย DomainHost360.com วันที่ 06/09/2553
################################################################################
# ผู้ให้การสนับสนุนโปรเจค Siam Opencart
#
# DomainHost360.com: บริการ Hosting สำหรับ Opencart พื้นที่ 10 GB ปีละ 999 บาท Server เร็วสุดในไทย
# Unitedsme.com : ผู้ให้บริการเช่าพื้นที่เว็บไซต์ จดโดเมน ระบบ Linux โทร. 081-454-9454 [คุณภูมิ]
# Net-LifeStyle.com : ผู้ให้บริการเช่าพื้นที่เว็บไซต์ จดโดเมน ระบบ Linux & Windows โทร. 086-338-5909 [คุณโสภณ]
# SiamWebThai.com : SEO ขั้นเทพ โปรโมทเว็บขั้นเซียน ออกแบบ พัฒนาเว็บไซต์ / ตามความต้องการ และถูกใจ Google 
# โทร. 086-549-9998 [คุณมานะ] ทำให้เว็บไซต์ของคุณติดหน้าแรกของ Google ตามคำที่คุณต้องการ!
################################################################################
# ขอแนะนำ Web hosting สำหรับ Open cart
#
#1. www.domainhost360.com
#2. www.hostzaa.com
#3. www.citec.us
#4. www.mehostdd.com
################################################################################

// Heading
$_['heading_title']              = 'จัดการสินค้า'; 

// Tab
$_['tab_shipping']           = 'การจัดส่ง';
$_['tab_links']              = 'ลิงค์';

// Text  
$_['text_success']               = 'สำเร็จ: แก้ไขจัดการสินค้าเรียบร้อยแล้ว!';
$_['text_plus']                  = '+';
$_['text_minus']                 = '-';
$_['text_default']           = 'ร้านค้าหลัก';
$_['text_image_manager']     = 'จัดการภาพ';
$_['text_option']            = 'ออปชั่น';
$_['text_option_value']      = 'ค่าของออปชั่น';

// Column
$_['column_name']                = 'ชื่อสินค้า';
$_['column_model']               = 'รุ่น';
$_['column_image']                = 'ภาพสินค้า';
$_['column_quantity']            = 'ปริมาณ';
$_['column_status']              = 'สถานะ';
$_['column_action']              = 'การกระทำ';

// Entry
$_['entry_name']                 = 'ชื่อสินค้า:';
$_['entry_meta_description']     = 'คำใน Meta Tag ใช้ช่องว่าเป็นตัวแบ่ง:';
$_['entry_meta_keywords'] 	 = 'คำค้น ประเภท Keyword:';
$_['entry_description']          = 'คำอธิบาย:';
$_['entry_store']            = 'ร้าน:';
$_['entry_keyword']              = 'ชื่อเรียกแบบ SEO (/ชื่อสินค้า):';
$_['entry_model']                = 'รุ่น:';
$_['entry_sku']              = 'SKU:';
$_['entry_location']         = 'สถานที่:';
$_['entry_manufacturer']     = 'ผู้ผลิต:';
$_['entry_shipping']         = 'ต้องมีการจัดส่ง:'; 
$_['entry_date_available']   = 'วันมีสินค้า:';
$_['entry_quantity']         = 'ปริมาณ:';

$_['entry_minimum']          = 'จำนวนซื้อขั้นต่ำ:<br/><span class="help">บังคับว่าต้องซื้อขั้นต่ำกี่ชิ้น</span>';
$_['entry_stock_status']     = 'สินค้าหมด:<br/><span class="help">สถานะที่จะแสดงเมื่อสินค้าหมดสต๊อค</span>';
$_['entry_status']           = 'สถานะ:';
$_['entry_tax_class']        = 'ระดับภาษี:';
$_['entry_cost']             = 'ต้นทุน:<br/><span class="help">ใช้ในการคำนวนกำไรจากการขายสินค้า</span>';
$_['entry_price']            = 'ราคา:';
$_['entry_subtract']         = 'สต็อคย่อย:';
$_['entry_weight_class']         = 'หน่วยน้ำหนัก:';
$_['entry_weight']               = 'น้ำหนัก:';
$_['entry_length']           = 'หน่วยความยาว:';
$_['entry_dimension']            = 'มิติ (ก x ย x ส):';
$_['entry_image']                = 'ภาพ:';
$_['entry_customer_group']       = 'กลุ่มลูกค้า:';
$_['entry_date_start']           = 'วันเริ่ม:';
$_['entry_date_end']             = 'วันหยุด:';
$_['entry_priority']             = 'ลำดับความสำคัญ:';
$_['entry_option']               = 'ออปชั่นสินค้า:';
$_['entry_option_value']         = 'ค่าออปชั่น:';
$_['entry_sort_order']       = 'การจัดลำดับ:';
$_['entry_prefix']               = 'คำนำ:';
$_['entry_category']             = 'ประเภท:';
$_['entry_download']             = 'ดาวน์โหลด:';
$_['entry_related']              = 'สินค้าใกล้เคียง:';
$_['entry_tags']          	 = 'แท็กสินค้า:<br /><span class="help">ใช้ตัว , (คอมม่า เป็นตัวแบ่งคำ)</span>';

// Error
$_['error_permission']           = 'คำเตือน: คุณไม่ได้รับอนุญาตให้แก้ไขสินค้า!';
$_['error_name']                 = 'ชื่อสินค้าต้องมากกว่า 3 และน้อยกว่า 255 ตัวอักษร!';
$_['error_model']                = 'โมเดลขอสินค้าต้องมากกว่า 3 และน้อยกว่า 64 ตัวอักษร!';
$_['error_required_data']    = 'จำเป็นต้องใส่ข้อมูล. ตรวจสอบพื้นที่ผิด!';
?>