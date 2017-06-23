DROP PROCEDURE IF EXISTS myProc3;
CREATE PROCEDURE myProc3(IN val VARCHAR(15), IN val2 VARCHAR(15))
  BEGIN
     DROP TEMPORARY TABLE IF EXISTS ttab;
     create TEMPORARY TABLE IF NOT EXISTS ttab (SELECT projectdetails.PROJECTID, projectdetails.PROCURINGENTITY, projectdetails.CONTRACTSUM, (projectdetails.DATEOFAWARD) as yr,
            (SELECT SUM(AMOUNT) from certificates WHERE projectdetails.PROJECTID = certificates.PROJECTID GROUP BY certificates.PROJECTID) as cAmount,
           (SELECT SUM(AMOUNT) from variations WHERE projectdetails.PROJECTID = variations.PROJECTID GROUP BY variations.PROJECTID ) as vAmount
          FROM projectdetails
    JOIN variations ON projectdetails.PROJECTID = variations.PROJECTID OR variations.PROJECTID = "aa111"
    JOIN certificates ON projectdetails.PROJECTID = certificates.PROJECTID OR certificates.PROJECTID = "aa111"
    GROUP BY projectdetails.PROJECTID) ;
 (SELECT PROCURINGENTITY, SUM(CONTRACTSUM) as CSUM1, SUM(cAmount) as CAMOUNT, SUM(vAmount) as VAMOUNT from ttab WHERE yr BETWEEN val AND val2 GROUP BY PROCURINGENTITY LIMIT 2);

   END;
