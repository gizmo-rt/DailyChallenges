# https://codefights.com/challenge/CBiayArRfZEyDDGX8
#
# Input: d: "^-^+^-^+^<^>^<^>^-^+^^"
# Expected Output: [-12, 0, 0]
#
# Input: d: "---<"
# Expected Output:[0, -1, -3]
#
# Input: d: ">"
# Expected Output: [0, 1, 0]

import collections as c


def Nav(d):
    r = [0, 0, 0]
    m = c.Counter(d)
    r[0] = m["v"] - m["^"]
    r[1] = m[">"] - m["<"]
    r[2] = m["+"] - m["-"]
    return r
