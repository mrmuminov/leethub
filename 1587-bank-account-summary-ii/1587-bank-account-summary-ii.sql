SELECT DISTINCT u.name, t.balance  FROM Users u 
INNER JOIN (
    SELECT account, SUM(amount) balance 
    FROM Transactions 
    GROUP BY account
) t ON t.account = u.account
WHERE t.balance > 10000