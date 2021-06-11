SELECT
    u.`user_id`,
    u.`first_name`,
    u.`last_name`,
    t.`test_id`,
    MAX(t.`time_taken`) AS `time_taken`,
    AVG(`correct`) AS `average_correct_ans`
FROM
    `test_result` t
RIGHT OUTER JOIN `USER` u ON
    t.`user_id` = u.`user_id`
GROUP BY
    t.`user_id`
ORDER BY
    `time_taken`
DESC
    
