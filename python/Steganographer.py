# https://codefights.com/challenge/PyzYWH2rf7eJDh9QH?


def steganographer(rgba_arr, d):
    c = "{0:b}".format(d).zfill(4)
    s=''
    x=''
    for k in rgba_arr:
        for i in k:
            t = "{0:b}".format(i).zfill(32)
            if c[0] == '1':
                s+=t[7]
            if c[1] == '1':
                s += t[15]
            if c[2] == '1':
                s += t[23]
            if c[3] == '1':
                s += t[31]

    for i in xrange(0,len(s),7):
        m = s[i:i+7]
        x+=chr(int(m,2))
        i += 7

    return x


rgb_arr = [[1852001592, 642517586,  1375810157, 978611461,  209602908,  1815751467, 1918763865],
 [2099972387, 625962066,  209155390,  662511729,  1074152308, 1464016421, 240729689],
 [1544184132, 1882073136, 371947289,  839922279,  459299100,  1416848664, 1818624513],
 [187696431,  50614298,   1260153149, 1948346715, 1028787982, 1426982168, 1228945414],
 [795629403,  1450318166, 2063688524, 510462577,  1214057803, 1848402996, 139541769]
]

code = 3

print steganographer(rgb_arr, code)