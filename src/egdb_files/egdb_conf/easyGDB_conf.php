<?php
/******************************************************************************/
/*                               FILE PATHS                                   */
/******************************************************************************/
$root_path = "/var/www/html"; // Absolute path
$egdb_files_folder = "egdb_files";

$easy_gdb_path = "$root_path/easy_gdb";
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$downloads_path = "downloads";
$annotations_path = "$root_path/annotations";
$blast_dbs_path = "$root_path/blast_dbs";
$lookup_path = "$root_path/lookup";   
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$json_files_path = "$root_path/$egdb_files_folder/json_files";

// Custom css file
$custom_css_path = "$egdb_files_folder/css/custom.css";

// Expression
$expression_path = "$root_path/expression_data";
$private_expression_path = "$root_path/private_expression_data";

// Passport
$passport_path = "$root_path/passport/example";
$phenotype_imgs_path = "$images_path/descriptors_imgs";


/******************************************************************************/
/*                       SITE TITLE, LOGO & HEADER                            */
/******************************************************************************/
$dbTitle = "Easy GDB";
$db_logo = "egdb_logo.png";

// Select 0 to disable the header image, or provide an image filename to display it.
$header_img = "header_img.png";


/******************************************************************************/
/*                                 SWITCHES                                   */
/******************************************************************************/
// Remove citation from welcome page
$rm_citation = 1;

// Select 1 to store annotations in files or 0 to store annotations in a relational database.
$file_database = 1;

// Set to 1 to remove the jbrowse frame from gene.php. Set to 1 if JBrowse was not installed or setup.
$rm_jb_frame = 1;

//*** Toolbar configuration ***//
$tb_custom = 0;            // Enable/disable custom toolbar
$tb_rm_home = 0;           // Remove the site title, so you can create your own

$tb_downloads = 1;         // Enable/disable "Downloads" on the toolbar.
$tb_species = 1;           // Enable/disable "Species" on the toolbar.
$tb_search_box = 0;        // Enable/disable "Search box" on the toolbar.
$tb_help = 1;              // Enable/disable "Help" on the toolbar.
$tb_more = 0;              // Enable/disable "More" on the toolbar.
$tb_private = 0;           // Enable/disable "Private" on the toolbar.

//*** Tools section ***//
$tb_tools = 1;            // Enable/disable the "Tools" dropdown on the toolbar.
$tb_search = 1;           // Enable/disable the "Search" tool in the Tools dropdown.
$tb_blast = 1;            // Enable/disable the "BLAST" tool in the Tools dropdown.
$tb_jbrowse = 1;          // Enable/disable the "JBrowse" link in the Tools dropdown. This assumes you have JBrowse installed and setup at /jbrowse.
$tb_jbrowse2 = 1;         // Enable/disable the "JBrowse synteny" viewer link in the Tools dropdown. This assumes you have a synteny viewer setup at /jbrowse2.
$tb_seq_ext = 1;          // Enable/disable the "Sequence extraction" tool in the Tools dropdown.
$tb_annot_ext = 1;        // Enable/disable the "Annotation extraction" tool in the Tools dropdown.
$tb_lookup = 1;           // Enable/disable the "Gene version lookup" tool in the Tools dropdown.
$tb_enrichment = 0;       // Enable/disable the "Gene set enrichment" tool in the Tools dropdown.

//*** Gene expression atlas section***//
$tb_gene_expr = 1;        // Enable/disable "Gene expression" tools dropdown on the toolbar.
$tb_expr_viewer = 1;      // Enable/disable "Gene expression viewer" tool in the Gene expression dropdown.
$tb_expr_comparator = 1;  // Enable/disable "Gene expression comparator" tool in the Gene expression dropdown.
$tb_cv_calculator = 1;    // Enable/disable "CV calculator" tool in the Gene expression dropdown.
$tb_expr_datasets = 1;    // Enable/disable "Datasets information" page in the Gene expression dropdown.
$expr_menu = 1;           // Enable/disable a "Dataset Information" link in the expression tools (viewer and comparator) that displays all dataset descriptions.
$comparator_lookup = 1;   // Enable/disable the gene version lookup checkbox in the expression comparator.
/* -------------------------------------------------------------------------------------------------------------------------------------------------
  NOTE: 
  - If $tb_gene_expr = 1 and the individual activation variables ($tb_expr_viewer, $tb_expr_comparator, $tb_cv_calculator, $tb_expr_datasets)
     are not defined (variables do not exist),
        → The expression tool not defined (viewer, comparator, CV calculator, datasets page) are enabled by default.
  - To disable any specific expression tool, set its variable to 0. Do NOT remove the variable.
-------------------------------------------------------------------------------------------------------------------------------------------------- */

//*** Passport and Phenotype section ***//
$tb_passport = 1;         // Enable/disable "Passport and phenotype" dropdown on the toolbar. 
$tb_navigation = 1;       // Enable/disable "Navigation" tool in the Passport and phenotype dropdown.
$tb_search_passport = 1;  // Enable/disable "Search" tool in the Passport and phenotype dropdown. 
$show_map = 1;            // Enable/disable the map in the passport and phenotype output.
$show_qr = 1;             // Enable/disable the QR code in the passport and phenotype output.
/* -------------------------------------------------------------------------------------------------------------------------------------------------
  NOTE: 
  - If $tb_passport = 1 and the individual activation variables ($tb_navigation, $tb_search_passport) are not defined (variables do not exist),
        → The passport and phenotype tool not defined (navigation, search) are enabled by default.
  - To disable any specific passport and phenotype tool, set its variable to 0. Do NOT remove the variable.
-------------------------------------------------------------------------------------------------------------------------------------------------- */

//*** About *** // 
$tb_about = 1;          // Enable/disable "about" on the toolbar 
$ab_citation = 1;       // Enable/disable the citation section in the "About" page
$ab_labs = 1;           // Enable/disable the labs section in the "About" page. This section displays the labs contributors.


/******************************************************************************/
/*                     EXPRESSION TOOLS ORDER & COLORS                        */
/******************************************************************************/
// Expression tools order: 0 for not shown, >=1 to setup the order
$positions=[
  'description' => 1,
  'cartoons' => 2,
  'lines' => 3,
  'cards' => 4,
  'heatmap' => 5,
  'replicates' => 6,
  'table' => 7
];

//*** Generic colors and ranges of expression ***
// This section defines the colors, ranges and range labels for the color scale used in the expression tools.
// The order of the elements is from lowest to highest expression.
// $colors: place the color code you want to use for each range of expression.
// $ranges_text: write the text to be displayed in each of the expression ranges.
// $ranges: array that contains the lower and upper limits of each range. [lower,uppper].

$colors = ["#eceff1","#b3e5fc","#80cbc4","#ffee58","#ffb74d","#ff8f00","#ff4f00","#cc0000","#D72C79","#801C5A","#6D3917","#443627"];
$ranges_text =["<1",">=1",">=2",">=5",">=10",">=50",">=100",">=200",">=500",">=1000",">=5000",">=8000"];
$ranges=[[0,0.99],[1,1.99],[2,4.99],[5,9.99],[10,49.99],[50,99.99],[100,199.99],[200,499.99],[500,999.99],[1000,4999.99],[5000,7999.99],[8000,80000]];

// If you want to create a specific color palette for each dataset, you can configure it in the json_files/tools/expression_info.json 

/******************************************************************************/
/*                             GENE EXAMPLES                                  */
/******************************************************************************/
$gene_sample = "";
$input_gene_list="gene1.1
gene2.1
gene3.1";

/******************************************************************************/
/*                                   LIMITS                                   */
/******************************************************************************/
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 15;
$max_annotation_input = 5000;


/******************************************************************************/
/*                                   BLAST                                    */
/******************************************************************************/
//enable BLAST in multiple databases simultaneously
$multiple_blast_db = 0;

$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA
GGCTTGAGCGGGCATATCGATACTGACTGATCGATCGATCGTAGCTAGCTAGCTGATCGT
CGTAGCTAGTCGATCGTA";

?>

