<?php
    
/**
 * @author Michele Andreoli <michi.andreoli@gmail.com>
 * @name Table.class.php
 * @version 0.1
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @package TableGenerator
 */

    //kurzform
        //~ require_once 'tableclass.php';
        //~ $data[0][0] = "a";
        //~ $data[0][1] = "v";        
        //~ $logoStyleTable = new Table("logoStyleTable");
        //~ $logoStyleTable->showTable(Null, $data);

          //require_once 'tableclass.php';

            //Set table's headers
            //$headers = array("ID", "Name", "E-mail", "Home");
            //Set table's matrix data
            //~ $data[0] = array("1", "Megan", "megan.fox@gmail.com", "<a href=\"#\">index</a>");
            //~ $data[1] = array("2", "John", "john.doe@gmail.com", "<a href=\"#\">index</a>");
            //~ $data[2] = array("3", "Paul", "paul.butter@gmail.com", "<a href=\"#\">index</a>");
    
            /**
             * Create an instance of Table class
             * @param <Boolean> true: zebra rows on, false: zebra rows off
             * [@param] <String> table id
             * [@param] <String> table class
             */
    //        $t = new Table(true, "tableID");
            
            /**
             * Set a class or id for thead, tbody and tfoot of table
             * @param <String> class name
             * [@param] <String> id name
             */
  //          $t->setHeaderClass("headClass");
 //           $t->setBodyClass("bodyClass");
//            $t->setFooterClass("footClass");

  //          $t->setColumnsWidth(array("20px", "150px", "150px", "80px"));
//            $t->showTable($headers, $data);


class Table {
    private $zebra;
    private $tableId;
    private $tableClass;
    private $headerId;
    private $headerClass;
    private $bodyId;
    private $bodyClass;
    private $footerId;
    private $footerClass;
    private $zebraClass;
    private $tableWidth;
    private $columnsWidth;

    /**
     * Constructor for table class
     * @param <Boolean> $zebra set on/off the zebra mode
     * @param <String> $id id name for this table
     * @param <String> $class class name for this table
     */
    public function __construct($id=null, $class=null) {
        $zebra=null;
        if ($id != null)
            $this->tableId = "id=\"$id\"";
        if ($class != null)
            $this->tableClass = "class=\"$class\"";
        if ($zebra != null)
            $this->zebra = true;
        else
            $this->zebra = false;
    }

    /**
     * Setter for zebra mode
     * @param <type> $zebra set on/off the zebra mode
     */
    public function setZebra($zebra) {
        $this->zebra = $zebra;
    }

    /**
     * Setter for table width
     * @param <String> $string width of table for example '600px' or '100%'
     */
    public function setTableWidth($string) {
        $this->tableWidth = "style=\"width:$string\"";
    }

    /**
     * Setter for columns width
     * @param <Array> $array array with the width for every column
     */
    public function setColumnsWidth($array) {        
        foreach ($array as $elem) {
            if ($elem != "")
                $this->columnsWidth[] = "style=\"width:$elem\"";
            else
                $this->columnsWidth[] = "";
        }
    }

    /**
     * Setter for table class name
     * @param <String> $class class name
     */
    public function setTableClass($class) {
        $this->tableClass = "class=\"$class\"";
    }

    /**
     * Setter for table id name
     * @param <String> $id id name
     */
    public function setTableId($id) {
        $this->tableId = "id=\"$id\"";
    }

    /**
     * Setter for thead class name
     * @param <String> $class class name
     */
    public function setHeaderClass($class) {
        $this->headerClass = "class=\"$class\"";
    }

    /**
     * Setter for thead id name
     * @param <String> $id id name
     */
    public function setHeaderId($id) {
        $this->headerId = "id=\"$id\"";
    }

    /**
     * Setter for tbody class name
     * @param <String> $class class name
     */
    public function setBodyClass($class) {
        $this->bodyClass = "class=\"$class\"";
    }

    /**
     * Setter for tbody id name
     * @param <String> $id id name
     */
    public function setBodyId($id) {
        $this->bodyId = "id=\"$id\"";
    }

    /**
     * Setter for tfoot class name
     * @param <String> $class class name
     */
    public function setFooterClass($class) {
        $this->footerClass = "class=\"$class\"";
    }

    /**
     * Setter for tfoot id name
     * @param <String> $id id name
     */
    public function setFooterId($id) {
        $this->footerId = "id=\"$id\"";
    }

    /**
     * Print the table
     * @param <Array> $headers header for every column
     * @param <Array> $data data matrix
     */
    public function get_table($headers, $data) {
        $count = 0;
        $table = "<table";
        $table .= ' border="0" cellspacing="0" cellpadding="0"'; 
        $table .= " $this->tableWidth $this->tableId $this->tableClass>";

        if (!$headers) {
            //~ $this->setHeaderClass("");
            //~ $this->setBodyClass("");
            //~ $this->setFooterClass("");
            $headers = array();
        }

        //HEADER
        if ((isset($this->headerId) and $this->headerId) or
            (isset($this->headerClass) and $this->headerClass)) {
            $table .= "<thead $this->headerId $this->headerClass><tr>";
            foreach($headers as $h) {
                $table .= "<td>$h</td>";
                $count++;
            }
            $table .= "</tr></thead>";
        }
        
        //FOOTER
        if ((isset($this->footerId) and $this->footerId) or
            (isset($this->footerClass) and $this->footerClass)) {        
            $table .= "<tfoot $this->footerId $this->footerClass><tr>";
            foreach($headers as $h)
                $table .= "<td></td>";
            $table .= "</tr></tfoot>";
        }
            
        $table .= "<tbody $this->bodyId $this->bodyClass>";

        //BODY
        $rowCount = 0;
        foreach ($data as $row) {
            if ($this->zebra) {
                if ($rowCount%2 == 1)
                    $this->zebraClass = "class=\"zebraOn\"";
                else
                    $this->zebraClass = "class=\"zebraOff\"";
            }

            $colCount = 0;
            $table .= "<tr$this->zebraClass>";
            foreach ($row as $col){
                $style = "";
                if ($rowCount === 0)
                    $style = " ".$this->columnsWidth[$colCount];
                $table .= "<td".$style.">$col</td>";
                $colCount++;
            }
            $table .= "</tr>";
            $rowCount++;
        }        

        $table .= "</tbody></table>";
        return $table;
    }
    
    function show_table($headers, $data) {
        echo $this->get_table($headers, $data);
    }
}

// wrapper for table

class NewsTable {
    private $iRow;
    private $t;
    private $data;
    
    public function __construct() {
        $this->iRow = 0;
        $this->t = new Table();
    }
    
    public function add_row($col0, $col1="", $col2="") {
        $this->data[$this->iRow][0] = $col0;
        $this->data[$this->iRow][1] = $col1;
        $this->data[$this->iRow][2] = $col2;
        $this->iRow += 1;
    }
    
    public function get_table() {
        return $this->t->get_table(Null, $this->data);
    }
    
    public function set_columns_width($array) {        
        $this->t->setColumnsWidth($array);
    }
}


?>
