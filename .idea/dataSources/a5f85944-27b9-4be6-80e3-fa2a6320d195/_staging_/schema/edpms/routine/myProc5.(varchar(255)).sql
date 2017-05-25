DROP PROCEDURE IF EXISTS myProc5;
CREATE PROCEDURE myProc5(IN val VARCHAR(255))
  BEGIN
SELECT projectdetails.PROJECTID,  projectdetails.TITLE , projectdetails.CONTRACTOR, projectdetails.CONTRACTSUM, certificates.AMOUNT AS cAmount, variations.AMOUNT AS vAmount
FROM projectdetails
  JOIN variations ON projectdetails.PROJECTID = variations.PROJECTID OR variations.PROJECTID = "aa111"
  JOIN certificates ON projectdetails.PROJECTID = certificates.PROJECTID OR certificates.PROJECTID = "aa111"
WHERE projectdetails.CONTRACTOR = val
GROUP BY projectdetails.PROJECTID;
    END ;



SELECT projectdetails.PROJECTID,  projectdetails.TITLE , projectdetails.CONTRACTOR, projectdetails.CONTRACTSUM, certificates.AMOUNT AS cAmount, variations.AMOUNT AS vAmount
FROM projectdetails
  JOIN variations ON projectdetails.PROJECTID = variations.PROJECTID OR variations.PROJECTID = "aa111"
  JOIN certificates ON projectdetails.PROJECTID = certificates.PROJECTID OR certificates.PROJECTID = "aa111"
WHERE projectdetails.CONTRACTOR = 'KINETIC INFRASTRUCTION NIG LTD'
GROUP BY projectdetails.PROJECTID;