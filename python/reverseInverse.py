# https://codefights.com/challenge/bzkdx7vP3QJ8DgQTL

def reverseInverse(s):
    c = []
    f = []
    for t in list(s.lower()):
        if (t >= 'a' and t <= 'z') or (t >= '0' and t <= '9'):
            c.append(t)
        else:
            f += c[::-1]
            f += t
            c = []

    for i in range(len(s)):
        if s[i] >= 'a' and s[i] <= 'z':
            f[i] = chr(ord(f[i]) - 32)

    return ''.join(f)


print reverseInverse("So, what is CodeFights?")

# OUTPUT: oS, TAHW SI sTHGiFEDOC?
