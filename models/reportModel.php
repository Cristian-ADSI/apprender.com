<?php

class ReportModel extends Model
{

    public function __construct()
    {
        // error_log('Report_MODEL::CONSTRUCT=>Loaded');
        parent::__construcut();
    }

    public function mostSolicited()
    {
        try {
            $string = "CALL sp_reporte1()";

            $query = $this->prepare($string);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $err) {
            error_log("REPORT_MODEL::MOST_SOLICITED=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function reportOne()
    {
        try {
            $string = "CALL sp_reporte1()";

            $query = $this->prepare($string);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $err) {
            error_log("REPORT_MODEL::REPORT_ONE=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function reportTwo($COURSE)
    {
        try {
            $string = "CALL sp_reporte2('$COURSE')";

            $query = $this->prepare($string);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $err) {
            error_log("REPORT_MODEL::REPORT_TWO=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function reportThree($YEAR, $S_MONTH, $E_MONTH)
    {
        try {
            $string = "CALL sp_reporte3($YEAR, $S_MONTH, $E_MONTH)";

            $query = $this->prepare($string);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $err) {
            error_log("REPORT_MODEL::REPORT_TWO=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function reportFour($YEAR, $S_MONTH, $E_MONTH)
    {
        try {
            $string = "CALL sp_reporte4($YEAR, $S_MONTH, $E_MONTH)";

            $query = $this->prepare($string);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $err) {
            error_log("REPORT_MODEL::REPORT_TWO=>PDOEXEPTION: $err");
            return false;
        }
    }

    public function reportFive($YEAR, $S_MONTH, $E_MONTH)
    {
        try {
            $string = "CALL reporte5($YEAR, $S_MONTH, $E_MONTH)";

            $query = $this->prepare($string);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $err) {
            error_log("REPORT_MODEL::REPORT_TWO=>PDOEXEPTION: $err");
            return false;
        }
    }
}
