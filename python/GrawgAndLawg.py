# https://codefights.com/challenge/YapP4jc9KPYq9RA5s

import re


def grawgAndLawg(l):
    d = {'N': 'E', 'L': "\xc6\x8e", 'F': "\xc2\xa3", 'C': 'F'}
    n = {'S': '-', 'M': '=', 'G': '\xe2\x89\xa1'}
    r = []

    for c in l:
        y = 0
        for u in list(d):
            x = c.rfind(u)
            if x > y:
                y = x
                p = u
                j = u
        y = 0
        for u in list(n):
            x = c.rfind(u)
            if x > y:
                y = x
                g = u
        h = n[g] * int(re.findall(r'\d+', c)[-1])
        p = d[p]
        k = h + p
        if c.count('T'):
            if j == 'L':
                k = p + h + ' ==<o~'
            else:
                k = '~o>== ' + k
        r.append(k)
    return r


ormt = ["TFS6", "T3TFB15NFCFFFCNMGLLGFLTTMGTSTT"]

data = grawgAndLawg(ormt)

print(data)
